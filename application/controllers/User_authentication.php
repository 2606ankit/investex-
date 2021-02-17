<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User_authentication extends CI_Controller { 
    function __construct() { 
        parent::__construct(); 
         
        // Load facebook oauth library 
        $this->load->library('facebook'); 
          
        // Load user model 
        $this->load->model('user'); 
    } 
     
    public function index(){ 
        $userData = array(); 
        //echo $_GET['usertype']; die;
        // Authenticate user with facebook 
        if($this->facebook->is_authenticated()){ 
            // Get user info from facebook 
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture'); 
 
            // Preparing data for database insertion 
            $userData['oauth_provider'] 		= 'facebook'; 
            $userData['oauth_uid']    			= !empty($fbUser['id'])?$fbUser['id']:'';; 
            $userData['first_name']    			= !empty($fbUser['first_name'])?$fbUser['first_name']:''; 
            $userData['last_name']   			= !empty($fbUser['last_name'])?$fbUser['last_name']:''; 
            $userData['user_email']       		= !empty($fbUser['email'])?$fbUser['email']:''; 
            $userData['gender']        			= !empty($fbUser['gender'])?$fbUser['gender']:''; 
            $userData['user_image']    			= !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:''; 

            $userData['user_login_status']      = LOGIN_STATUS_ACTIVE;
            $userData['status']        			= ACTIVE;
            $userData['user_type']        		= DEALER;//$_GET['usertype'];

            $userData['link']        			= !empty($fbUser['link'])?$fbUser['link']:'https://www.facebook.com/'; 
           
            // Insert or update user data to the database 
            $userID = $this->user->checkUser($userData); 
             
            // Check user data insert or update status 
            if(!empty($userID)){ 
                $data['userData'] = $userData; 
                 
                 if ($userData['user_type'] == DEALER){
	                redirect(SITE_URL.'dealerdashboard');
                 }else{
		            redirect(SITE_URL.'investorDashboard');
                 }
            }else{ 
               $data['userData'] = array(); 
            } 
             
            // Facebook logout URL 
            $data['logoutURL'] = $this->facebook->logout_url(); 
        }else{ 
            // Facebook authentication url 
            $data['authURL'] =  $this->facebook->login_url(); 
        } 
         
        // Load login/profile view 
        $this->load->view('frontend/dealerdashboard',$data); 
    } 
 
    public function logout() { 
        // Remove local Facebook session 
        $this->facebook->destroy_session(); 
        // Remove user data from session 
        $this->session->unset_userdata('userData'); 
        // Redirect to login page 
        redirect(SITE_URL.'index'); 
    } 
}

?>