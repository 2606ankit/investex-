<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    function __construct() {
        $this->tableName = 'investex_user';
        $this->primaryKey = 'id';
    }
    
    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData = array()){
        if(!empty($userData)){
        	//echo '<pre>'; print_r($userData); die;
            //check whether user data already exists in database with same oauth info
           // echo '<pre>'; print_r($userData); die;
            /*$this->db->select("*");
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));

            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();*/
            $selectUser = $this->db->select("*")
            				->from($this->tableName)
            				->where("oauth_provider",$userData['oauth_provider'])
            				->where("oauth_uid",$userData['oauth_uid'])
            				->get();
            			//	echo $this->db->last_query();
            $userres = $selectUser->result();

           // echo '<pre>'; print_r($userres); die;
            if(!empty($userres)){
                //$prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['updated_date'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName, $userData, array('id' => $userres[0]->id));
                
                //get user ID
                $userID = $userres[0]->id;
                $sessData = array
							(
								'fname' 	=> 	!empty($userres[0]->first_name)?$userres[0]->first_name:'',
								'lname' 	=> 	!empty($userres[0]->last_name)?$userres[0]->last_name:'',
								'userid'	=> 	$userID,
								'username'	=>	!empty($userres[0]->first_name)?$userres[0]->first_name:''.' '.!empty($userres[0]->last_name)?$userres[0]->last_name:'',		
								'useremail'	=>	!empty($userres[0]->user_email)?$userres[0]->user_email:'',		
								'usertype'	=>	DEALER,
								'userimage'	=>	$userres[0]->user_image,
								'oauth_uid'	=>	$userres[0]->oauth_uid,
								'userloginstatus'	=>	LOGIN_STATUS_ACTIVE,
								'oauth_provider'	=> 	$userres[0]->oauth_provider,
								//$queryuser[0]->user_phone,
								'userphone'	=>	'',//$queryuser[0]->user_phone,
								//'userloginstatus'	=>	$queryuser[0]->user_login_status,
							);
							$this->session->set_userdata($sessData); 
            }else{
                //insert user data
                $userData['created_date']  = date("Y-m-d H:i:s");
                $userData['updated_date'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();
                $select = $this->db->select("*")
                			->from($this->tableName)
                			->where("id",$userID)
                			->get();
                $querydata = $select->result();
                			
                $sessData = array
							(
								'fname' 	=> 	!empty($querydata[0]->first_name)?$querydata[0]->first_name:'',
								'lname' 	=> 	!empty($querydata[0]->last_name)?$querydata[0]->last_name:'',
								'userid'	=> 	$userID,
								'username'	=>	!empty($querydata[0]->first_name)?$querydata[0]->first_name:''.' '.!empty($querydata[0]->last_name)?$querydata[0]->last_name:'',		
								'useremail'	=>	!empty($querydata[0]->user_email)?$querydata[0]->user_email:'',		
								'usertype'	=>	DEALER,
								'userimage'	=>	$querydata[0]->user_image,
								'oauth_uid'	=>	$querydata[0]->oauth_uid,
								'userloginstatus'	=>	LOGIN_STATUS_ACTIVE,//$queryuser[0]->user_phone,
								'userphone'	=>	'',//$queryuser[0]->user_phone,
								'oauth_provider'	=> 	$querydata[0]->oauth_provider
								//'userloginstatus'	=>	$queryuser[0]->user_login_status,
							);
							$this->session->set_userdata($sessData); 
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }
}