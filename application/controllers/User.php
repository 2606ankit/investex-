<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		$data = array();
	    parent::__construct();
	    // load library form validation
	    $this->load->library('form_validation');
	   	$this->load->helper('url');
	   	$this->load->library('pagination');
	   	$this->load->library('email'); 

	   	$this->load->model("AjaxModel");
	   	$this->load->model("UserModel");
	   	
	   	$this->loginuserid   	= 	$this->session->userdata('userid');
	   	$this->usertype 		= 	$this->session->userdata('usertype');
	   	$this->transactionType 	= 	$this->UserModel->getTransactionType();
	   	$this->isrealcountry 	=	$this->UserModel->getAllisrealcountry();
	   	$this->city 			=	$this->UserModel->getAllCity();


	   	if ($this->usertype == DEALER){
	   	// get all listing according to the dealer id
	   		$dealerid = $this->session->userdata('userid');
	   		$this->dealerProperty = $this->UserModel->getPropertyAccToDealerId($dealerid);
	   		//echo 'dealer';
	   	}else if ($this->usertype == INVESTOR){
	   		$investorid = $this->session->userdata('userid');
	   		
	   		$this->dealerProperty = $this->UserModel->getMatchAllPropertyByInvestorId($investorid);
	   		//echo 'investor';
	   	}

	}

	public function login()
	{
		if (!empty($_POST)){
			$username = $this->input->post("username");
			$userpass = md5($this->input->post("user_pass"));
			$data 	  = $this->UserModel->userlogin($username,$userpass);
			//print_r($data); die;
			if ($data){
				die('dfd');
				$loginid = $this->session->userdata('userid');
	 			if(!empty($loginid)){
	 				$usertype = $this->session->userdata('usertype');
	 				if ($usertype == DEALER){

	 					redirect(SITE_URL.'dealerdashboard');
	 				}elseif($usertype == INVESTOR) {
	 					redirect(SITE_URL.'investorDashboard');
	 				}else{
	 				//$this->session->set_flashdata('message', '');
	 					redirect(SITE_URL.'index');
	 				}
	 			}
			}
		}

		$this->load->view('frontend/login');
	}

	public function signout()
	{
		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    	$this->session->sess_destroy();
    	redirect(SITE_URL.'index');
	}

	public function index()
	{
		$this->load->view('frontend/index');
	}

	// function for joining dealer
	public function dealerjoin()
	{
		$loginid = $this->session->userdata('userid');
		if (empty($loginid)){
		 if (!empty($_POST)){
		 	//echo '<pre>'; print_r($_POST); die;
		 	$useremail = $this->input->post('dealer_email');
		 	$insertarray = array (

		 						"username"		=>	$this->input->post("dealer_username"),
		 						"password "		=>	md5($this->input->post("dealer_password")),
		 						"first_name"	=>	$this->input->post("dealer_firstname"),
		 						"last_name"		=>	$this->input->post("dealer_lastname"),
		 						"user_email"	=>	$this->input->post("dealer_email"),
		 						"user_phone"	=>	$this->input->post("dealer_phone"),
		 						"oauth_provider"=>	SITE_USER,
		 						"user_type"		=>	DEALER,
		 						"status"		=>	ACTIVE,
		 						"created_date"	=>	TODAY_DATE
		 					);
		 	$insertquery = $this->db->insert("investex_user",$insertarray);
		 	if ($insertquery){
		 		$insertid = $this->db->insert_id();
		 		$userdata = $this->db->select("*")
							->from("investex_user")
							->where("id",$insertid)
							->get();
				$result = $userdata->result();			
				$sessData = array
						(
							'fname' 	=> 	$result[0]->first_name,
							'lname' 	=> 	$result[0]->last_name,
							'userid'	=> 	$result[0]->id,
							'username'	=>	$result[0]->username,		
							'useremail'	=>	$result[0]->user_email,		
							'usertype'	=>	$result[0]->user_type
						);
				$sessiondata = $this->session->set_userdata($sessData);
				$loginid = $this->session->userdata('userid');
	 			if(!empty($loginid)){
	 				//$this->session->set_flashdata('message', '');
	 				redirect(SITE_URL.'');
	 			}
				//return $sessiondata;
		 		//$sendEmail = $this->AjaxModel->sendVerificationMail($insertid,$useremail);
		 	//	echo '<pre>'; print_r($sendEmail); die;
		 	}
		 }
	 		$this->load->view('frontend/dealerjoin');

		}
		else {
			redirect (SITE_URL.'propertyRegistration');
		}

	}

	
	// function for dealer Registration
	public function propertyRegistration()
	{
		if (!empty($this->loginuserid)){
			if (!empty($_POST)){
				$dealerid = $this->loginuserid;

				$pro_fullname 			= 	$this->input->post('pro_fullname');
				$pro_name 				= 	$this->input->post('pro_name');
				$pro_transaction_type 	= 	$this->input->post('pro_transaction_type');
				$cityvalue 				= 	$this->input->post('cityvalue');
				$streetval 				= 	$this->input->post('streetval');
				$pro_request_amount 	= 	$this->input->post('pro_request_amount');
				$pro_estimate_return 	= 	$this->input->post('pro_estimate_return');
				$pro_text 				=	$this->input->post('pro_text');
				$pro_details			=	$this->input->post('pro_details');

				//  ***************************
				//  Insert property image start here
				// ******************************
				$targetDir 			= 	FILE_UPLOAD_PATH.'property_image/';
				$insertimage  		= 	array();
				$extension 			=	array("jpeg","jpg","png","gif");

				//echo '<pre>'; print_r($_FILES); die;

				/*foreach($_FILES["uploadimage"]["tmp_name"] as $key=>$tmp_name) {

				    echo $file_name=$_FILES["uploadimage"]["name"][$key];
				    $file_tmp=$_FILES["uploadimage"]["tmp_name"][$key];

				    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

				    $fileName 		= 	time().'_propertyImage.jpg'; 
				  
	           		$targetFilePath = 	$targetDir . $fileName; 
				     //echo $targetFilePath;

				        if(!file_exists($targetFilePath)) {
				            move_uploaded_file($file_tmp,$targetFilePath);
				            $insertimage[] = $fileName;
				        }
				}

				echo '<pre>'; print_r($insertimage); die;*/
				$insertarr = array(

								'dealer_id'						=>	$dealerid,
								'property_name'					=>	$pro_fullname,
								'property_title'				=>	$pro_name,
								'property_text'					=>	$pro_text,
								'property_street'				=>	$streetval,
								'property_city'					=>	$cityvalue,
								'property_transaction_type'		=>	$pro_transaction_type,
								'property_investment_amount'	=>	$pro_request_amount,
								'property_estimated_return'		=>	$pro_estimate_return,
								'status'						=>	ACTIVE,
								'created_date'					=>	TODAY_DATE
							);

					$insertquery = $this->db->insert("user_dealer_property",$insertarr);

			}

			$data = array(
						'transaction_type'	=>	$this->transactionType,
						'allisrealcountry'		=>	$this->isrealcountry
					);

			$this->load->view('frontend/property_registration',$data);
		}else {
			redirect(SITE_URL.'login');
		}
	}
	// Delaer Listing Start here
	public function dealerproperty()
	{
		if (!empty($this->loginuserid)){

			$data = array(
					'allproperty' => $this->dealerProperty,
				);
			$this->load->view('frontend/propertylisting',$data);
		}
		else
		{
			redirect(SITE_URL.'index');
		}

	}
	// end here
	// function for Investor Dashboard
	public function investorDashboard()
	{
		$this->load->view('frontend/investorDashboard');
	}

	// function for Investor Join
	public function investorJoin()
	{
		$this->load->view('frontend/investorJoin');
	}

	// function for Investor Registration
	public function investorRegistration()
	{
		$this->load->view('frontend/investorRegistration');
	}

	// verify user email when sigh up new user
	public function verifyemail()
	{
		$userid = base64_decode($this->uri->segment(3));
		$email  = $this->uri->segment(4);

		$data = $this->AjaxModel->verifyemail($userid,$email);
		if ($data == TRUE){
			$loginid = $this->session->userdata('userid');
 			if(!empty($loginid)){
 				$this->session->set_flashdata('message', '');
 				redirect(SITE_URL.'dashboard');
 			}
		}
	}

}
