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
	   	$this->load->library('facebook'); 
	   	
	   	$this->loginuserid   	= 	$this->session->userdata('userid');
	   	$this->usertype 		= 	$this->session->userdata('usertype');
	   	$this->transactionType 	= 	$this->UserModel->getTransactionType();
	   	$this->isrealcountry 	=	$this->UserModel->getAllisrealcountry();
	   	$this->city 			=	$this->UserModel->getAllCity();
	   	$this->user_data 		= 	$this->session->all_userdata();

	   	if ($this->usertype == DEALER){
	   	// get all listing according to the dealer id
	   		$dealerid = $this->session->userdata('userid');
	   		//echo'<pre>';  print_r($this->session->userdata()); die;
	   		$this->dealerProperty = $this->UserModel->getPropertyAccToDealerId($dealerid);
	   		//echo '<pre>'; print_r(json_decode($this->dealerProperty)); die;
	   		//echo 'dealer';
	   	}else if ($this->usertype == INVESTOR){
	   		$investorid = $this->session->userdata('userid');
	   		
	   		//$this->investorProperty = $this->UserModel->getMatchAllPropertyByInvestorId($investorid);
	   		//echo 'investor';
	   		//echo '<pre>'; print_r(json_decode($this->dealerProperty)); die;
	   	}

	}

	public function login()
	{
		 
		$data = array('error'=>'');
		if (!empty($_POST)){
			$username 		= 	$this->input->post("username");
			$userpass 		= 	md5($this->input->post("user_pass"));
			$usedata 	  	= 	$this->UserModel->userlogin($username,$userpass);
			// print_r($usedata); die;

			if (!empty($this->session->userdata('userid'))){
				 
				$loginid = $this->session->userdata('userid');
	 			if(!empty($loginid)){
	 				
	 				$usertype = $this->session->userdata('usertype');
	 				 //echo $usertype; die;
	 				if ($usertype == DEALER){
	 					 
	 					redirect(SITE_URL.'dealerdashboard');
	 				}elseif($usertype == INVESTOR) {
	 					 
	 					redirect(SITE_URL.'investorDashboard');
	 				}else{
	 				//$this->session->set_flashdata('message', '');
		 					 
	 					redirect(SITE_URL.'index');
	 				}
	 			}
	 			//$data = array('error'=>'');
			}
			else 
			{
				$this->session->set_flashdata('error','Username or password does not match');
			}
		}
		 //echo '<pre>'; print_r($data); 
		$this->load->view('frontend/login',$data);
		 
	}
	// dealer login start here
	public function dealerlogin()
	{
	 
		$loginid = $this->session->userdata('userid');
		if (empty($loginid)){
		$data = array('error'=>'');
		if (!empty($_POST)){
			$username 		= 	$this->input->post("username");
			$userpass 		= 	md5($this->input->post("user_pass"));
			$usedata 	  	= 	$this->UserModel->userlogin($username,$userpass);
			//print_r($usedata); die;

			if (!empty($this->session->userdata())){
				 
				$loginid = $this->session->userdata('userid');
	 			if(!empty($loginid)){
	 				
	 				$usertype = $this->session->userdata('usertype');
	 				if ($usertype == DEALER){
	 					redirect(SITE_URL.'dealerdashboard', 'refresh');
	 				}elseif($usertype == INVESTOR) {
	 					redirect(SITE_URL.'investorDashboard', 'refresh');
	 				}else{
	 				//$this->session->set_flashdata('message', '');
	 					redirect(SITE_URL.'index');
	 				}
	 			}
	 			$data = array('error'=>'');
			}
			else {
				 
				$data = array ('error'=>'Username or Password does not match');
			}
		}
		
		$this->load->view('frontend/dealerlogin',$data);
		}
		else {
			redirect(SITE_URL.'index');
		}
	 
	}
	// end here

	public function signout()
	{
		$loginid = $this->session->userdata('userid');
		$updateslogintatus = $this->db->where("id",$loginid)->update("investex_user",array("user_login_status"=> LOGIN_STATUS_INACTIVE)); 
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
		$loginid = $this->session->userdata('userid');
		//echo '<pre>'; print_r($this->session->userdata()); die;
		$this->load->view('frontend/index');
	}

	// sign up page 
	public function join()
	{
		$this->load->view('frontend/choicesignup');
	}
	// end here
	// change user password start here
	public function changepassword()
	{
		//echo '<pre>'; print_r($_POST); die;
		if(!empty($_POST)){
			$loginid = $this->session->userdata('userid');
			$newpass = $this->input->post('newpass');

			$updatearr = array("password"=>md5($newpass));
			$wherecon = array("id"=>$loginid);

			$updatequery = $this->db->where($wherecon)->update("investex_user",$updatearr);
			if ($updatequery)
			{
				redirect(SITE_URL.'userprofile','refresh');
			}

		}
	}
	// end here
	// user profile edit start here
	public function userprofile()
	{
		$loginid = $this->session->userdata('userid');
		if (!empty($loginid)){
			$userdata  = $this->session->userdata();
			$getUserdatabyId = $this->UserModel->getUserdatabyId($loginid);
			 
			if (!empty($_POST) && $_POST['first_name']){
				$first_name 	= 	$this->input->post('first_name');
				$last_name 		= 	$this->input->post('last_name');
				$useremail 		= 	$this->input->post('useremail');
				$userphone 		= 	$this->input->post('userphone');
				$userabout 		= 	$this->input->post('userabout');
				$user_gender	=	$this->input->post('user_gender');

				$targetDir 			= 	FILE_UPLOAD_PATH.'profile_image/';
 	       		$allowTypes 		= 	array('jpg','png','jpeg');

				$fileName 		= 	$loginid.'_'.time().'_profileImage.jpg'; 
	            $targetFilePath = 	$targetDir . $fileName;

	            $fileType 		= 	pathinfo($targetFilePath, PATHINFO_EXTENSION);

	            if(!empty($_FILES["uploadimage"]["tmp_name"])){
			            if(in_array($fileType, $allowTypes)){ 
			                // Upload file to server 
			                if(move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $targetFilePath)){ 
			                    $profile_image = $fileName;//"('".$fileName."', NOW()),"; 
			                } 
			            } 
			        }
			        else {
			        	$profile_image = $this->input->post('old_profile_image');
			        }
				$updatearray = array(
									'first_name'	=>	$first_name,
									'last_name'		=>	$last_name,
									'user_email'	=>	$useremail,
									'user_about'	=>	$userabout,
									'user_phone'	=>	$userphone,
									'user_image'	=>	$profile_image,
									'gender'		=>	$user_gender
								);
				$updatequery = $this->db->where("id",$loginid)->update("investex_user",$updatearray);
				if ($updatequery)
				{
					$this->session->set_flashdata('success','profile updated successfully');
				}
			}

			$data = array(
					'getUserdatabyId'	=>	$getUserdatabyId,
					'userdata'			=>	$userdata
				);
			$this->load->view('frontend/userprofile',$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here
	// function for joining dealer
	public function dealerjoin()
	{
		$loginid = $this->session->userdata('userid');
		if (empty($loginid)){
		 if (!empty($_POST)){ 
		 	$useremail = $this->input->post('dealer_email');
		 	$keepme = $this->input->post('keepme');
		 	$insertarray = array (

		 						"username"		=>	$this->input->post("dealer_username"),
		 						"password "		=>	md5($this->input->post("dealer_password")),
		 						"first_name"	=>	$this->input->post("dealer_firstname"),
		 						"last_name"		=>	$this->input->post("dealer_lastname"),
		 						"user_email"	=>	$this->input->post("dealer_email"),
		 						"user_phone"	=>	$this->input->post("dealer_phone"),
		 						"oauth_provider"=>	SITE_USER,
		 						"user_type"		=>	DEALER,
		 						"status"		=>	INACTIVE,
		 						"created_date"	=>	TODAY_DATE
		 					);

		 	$insertquery = $this->db->insert("investex_user",$insertarray);
		 	if ($insertquery){

		 		$insertid = $this->db->insert_id();
		 		$verifyEmail = $this->AjaxModel->sendVerificationMail($insertid,$useremail);
		 		//echo '<pre>'; print_r($verifyEmail); die;
		 		if ($keepme == 'on' && !empty($keepme)){

			 		$userdata = $this->db->select("*")
								->from("investex_user")
								->where("id",$insertid)
								->get();
					$queryuser = $userdata->result();			
					$sessData = array
							(
								'fname' 			=> 	$queryuser[0]->first_name,
								'lname' 			=> 	$queryuser[0]->last_name,
								'userid'			=> 	$queryuser[0]->id,
								'username'			=>	$queryuser[0]->username,		
								'useremail'			=>	$queryuser[0]->user_email,		
								'usertype'			=>	$queryuser[0]->user_type,
								'userimage'			=>	$queryuser[0]->user_image,
								'userphone'			=>	$queryuser[0]->user_phone,
								'userloginstatus'	=>	$queryuser[0]->user_login_status,
							);
					$sessiondata = $this->session->set_userdata($sessData);
					$loginid = $this->session->userdata('userid');
		 			if(!empty($loginid)){
		 				$this->session->set_flashdata('info', INFO_REGISTRATION);
		 				//echo '<pre>'; print_r($_SESSION); die;
		 				redirect(SITE_URL.'index');
		 			}
		 		}
		 		else
		 		{
		 			$this->session->set_flashdata('info', INFO_REGISTRATION);
		 			redirect(SITE_URL.'index');
		 		}
				 
		 	}
		 	else
		 		{
		 			$this->session->set_flashdata('error', ERROR_REGISTRATION);
		 		}
		 }
		  $data['authURL'] =  $this->facebook->login_url(); 
		 	$this->load->view('frontend/dealerjoin',$data);

		}
		else {
			redirect (SITE_URL.'propertyRegistration');
		}

	}

	
	// function for dealer Registration
	public function propertyRegistration()
	{
		if (!empty($this->loginuserid) && $this->session->userdata('usertype') == DEALER){
			if (!empty($_POST)){
				

				$dealerid 				= 	$this->loginuserid;

				$pro_name 				= 	$this->input->post('pro_name');
				$pro_transaction_type 	= 	$this->input->post('pro_transaction_type');
				$cityvalue 				= 	$this->input->post('cityvalue');
				$streetval 				= 	$this->input->post('streetval');
				$pro_request_amount 	= 	$this->input->post('pro_request_amount');
				$pro_estimate_return 	= 	$this->input->post('pro_estimate_return');
				$pro_text 				=	$this->input->post('pro_text');
				$pro_details			=	$this->input->post('pro_details');
				$latitude 				=	$this->input->post('Latitude');
				$langtitude 			=	$this->input->post('Longitude');
				$pro_price				=	$this->input->post('pro_price');
				$property_status		=	$this->input->post('property_statusval');
				$address  = '';
				 

				//  ***************************
				//  Insert property image start here
				// ******************************
				$targetDir 			= 	FILE_UPLOAD_PATH.'property_image/';
				$insertimage  		= 	array();
				$extension 			=	array("jpeg","jpg","png","gif");

			 
				$error=array();
				$extension=array("jpeg","jpg","png","gif");
				foreach($_FILES["uploadimage"]["tmp_name"] as $key=>$tmp_name) {
				    $file_name= time().'_'.$_FILES["uploadimage"]["name"][$key];
				    $file_tmp=$_FILES["uploadimage"]["tmp_name"][$key];
				    $ext =pathinfo($file_name,PATHINFO_EXTENSION);
				  //  $fileName 		= 	'del_'.$dealerid.'_'.time().'_propertyImage.'.$ext; 
			  		 
           			$targetFilePath = 	$targetDir.$file_name; 
				    if(in_array($ext,$extension)) {
				        
		            move_uploaded_file($_FILES["uploadimage"]["tmp_name"][$key],$targetFilePath);
				            $insertimage[] = $file_name;
				    }
				    
				}

				//echo '<pre>'; print_r($insertimage); die;
					$proimage 	= implode('|',$insertimage);
					$keyun 		= 'PROPERTY_'.$dealerid;
					$uniqueId 	= $this->UserModel->uniqueId($keyun);

					$insertarr = array(

								'dealer_id'						=>	$dealerid,
								'property_unique_id'			=>	$keyun,
								'property_name'					=>	$pro_name, 
								'property_text'					=>	$pro_text,
								'property_street'				=>	$streetval,
								'property_city'					=>	$cityvalue,
								'property_transaction_type'		=>	$pro_transaction_type,
								'property_investment_amount'	=>	$pro_request_amount,
								'property_estimated_return'		=>	$pro_estimate_return,
								'property_latitude'				=>	$latitude,
								'property_longtitue'			=>	$langtitude,
								'property_details'				=>	$pro_details,
								'property_address'				=>	$address,
								'property_price'				=>	$pro_price,
								'property_image'				=>	$proimage,
								'status'						=>	$property_status,
								'created_date'					=>	TODAY_DATE
							);

				$insertquery = $this->db->insert("user_dealer_property",$insertarr);
				if ($insertquery){
					$mailtype 	=	'property';
					$sendMail = $this->AjaxModel->sendMailProperty($type);
					$this->session->set_flashdata('success', PROPERTY_ADD_SUCCESS);
					redirect(SITE_URL.'dealerdashboard');
				}
				else {
					$this->session->set_flashdata('error', PROPERTY_ADD_ERROR);
					redirect(SITE_URL.'propertyRegistration');
				}
			}

			$data = array(
						'transaction_type'	=>	$this->transactionType,
						'allisrealcountry'	=>	$this->isrealcountry
					);

			$this->load->view('frontend/property_registration',$data);
		}else {
			redirect(SITE_URL.'dealerlogin');
		}
	}
	// edit property data here
	public function editproperty()
	{
		$proid = base64_decode($this->uri->segment(3));
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usertype') == DEALER){
			$getprodata = $this->UserModel->getpropertybyId($proid);

			$data = array(
					'getprodata' =>	json_decode($getprodata),
					'proid'		=>	$proid,
					'allisrealcountry'	=>	$this->isrealcountry,
					'transaction_type'	=>	$this->transactionType,
					);
			if (!empty($_POST)){
				$pro_name 				= 	$this->input->post('pro_name');
				$pro_transaction_type 	= 	$this->input->post('pro_transaction_type');
				$cityvalue 				= 	$this->input->post('cityvalue');
				$streetval 				= 	$this->input->post('streetval');
				$pro_request_amount 	= 	$this->input->post('pro_request_amount');
				$pro_estimate_return 	= 	$this->input->post('pro_estimate_return');
				$pro_text 				=	$this->input->post('pro_text');
				$pro_details			=	$this->input->post('pro_details');
				$latitude 				=	$this->input->post('Latitude');
				$langtitude 			=	$this->input->post('Longitude');
				$pro_price				=	$this->input->post('pro_price');
				$property_status		=	$this->input->post('property_statusval');
				$address  = '';
				 

				//  ***************************
				//  Insert property image start here
				// ******************************
				$targetDir 			= 	FILE_UPLOAD_PATH.'property_image/';
				$insertimage  		= 	array();
				$extension 			=	array("jpeg","jpg","png","gif");

			 
				$error=array();
				$extension=array("jpeg","jpg","png","gif");
				if (count($_FILES["uploadimage"]["tmp_name"]) == 0 ){
					 
					foreach($_FILES["uploadimage"]["tmp_name"] as $key=>$tmp_name) {
					    $file_name= time().'_'.$_FILES["uploadimage"]["name"][$key];
					    $file_tmp=$_FILES["uploadimage"]["tmp_name"][$key];
					    $ext =pathinfo($file_name,PATHINFO_EXTENSION);
					  //  $fileName 		= 	'del_'.$dealerid.'_'.time().'_propertyImage.'.$ext; 
				  		 
	           			$targetFilePath = 	$targetDir.$file_name; 
					    if(in_array($ext,$extension)) {
					        
			            move_uploaded_file($_FILES["uploadimage"]["tmp_name"][$key],$targetFilePath);
					            $insertimage[] = $file_name;
					    }
					    
					}
					$proimage = implode('|',$insertimage);
				}
				else {
					$proimage = $this->input->post('old_image');
				}
				//echo $this->input->post('old_image');
				//echo '<pre>'; print_r($insertimage); die;
					
				$insertarr = array(

								'dealer_id'						=>	$this->session->userdata('userid'),
								'property_name'					=>	$pro_name, 
								'property_text'					=>	$pro_text,
								'property_street'				=>	$streetval,
								'property_city'					=>	$cityvalue,
								'property_transaction_type'		=>	$pro_transaction_type,
								'property_investment_amount'	=>	$pro_request_amount,
								'property_estimated_return'		=>	$pro_estimate_return,
								'property_latitude'				=>	$latitude,
								'property_longtitue'			=>	$langtitude,
								'property_details'				=>	$pro_details,
								'property_address'				=>	$address,
								'property_price'				=>	$pro_price,
								'property_image'				=>	$proimage,
								'status'						=>	$property_status,
								'created_date'					=>	TODAY_DATE

							);
				//echo '<pre>'; print_r($insertarr); die;
				$insertquery = $this->db->where("id",$proid)->update("user_dealer_property",$insertarr);
				if ($insertquery){
					$this->session->set_flashdata("success",PROPERTY_EDIT_SUCCESS);
					redirect(SITE_URL.'dealerdashboard');
				}
				else {
					$this->session->set_flashdata("success",PROPERTY_EDIT_ERROR);
					redirect(SITE_URL.'editproperty/'.base64_encode($proid));
				}
			}
			$this->load->view('frontend/editproperty',$data);

		}
		else {
			redirect(SITE_URL.'dealerdashboard');
		}

	}
	// end here

	// Delaer Listing Start here
	public function dealerproperty()
	{
		if (!empty($this->loginuserid) && $this->session->userdata('usertype') == DEALER){

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
	// get dealer dashboard start here
	public function dealerdashboard()
	{
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usertype') == DEALER){
			$allproperty = json_decode($this->dealerProperty);
			$getOpenStatuspro = array ();
			$getOpenStatusInvestement = array();
			
			foreach ($allproperty as $key=>$val){
				if ($val->status == Open_For_Investement){
					$getOpenStatuspro[] = array ('proname'=>$val->property_name);
					$getOpenStatusInvestement[] = $val->property_investment_amount ;
				}
			} 
			//echo '<pre>'; print_r($this->user_data); die;
			$data = array(
						'userdata'					=>	 	$this->user_data,
						'allproperty'				=>	 	$allproperty,
						'getOpenStatuspro'			=>		$getOpenStatuspro,
						'getOpenStatusInvestement'	=>		$getOpenStatusInvestement
					);
			$this->load->view('frontend/dealerdashboard',$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here

	// get property details view  start here
	public function propertyview()
	{
		
	 
		if (!empty($this->user_data) && $this->session->userdata('usertype') == DEALER){
			$proid = base64_decode($this->uri->segment(3));
			$propertydata = $this->UserModel->getpropertybyId($proid);
			 //echo '<pre>'; print_r(); die;
			if (empty(json_decode($propertydata))){
				redirect(SITE_URL.'dealerdashboard');
			}
			else {
				$data = array(
						'userdata'		=>	 $this->user_data,
						'propertybyId'	=>	 json_decode($propertydata),
					);
		//	 echo '<pre>'; print_r(json_decode($propertydata)); die;
				$this->load->view('frontend/propertyview',$data);
			}
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here
	// function for Investor Dashboard
	public function investorDashboard()
	{
		//echo '<pre>'; print_r($this->session->userdata());
		if (!empty($this->session->userdata('userid')) && $this->session->userdata('usertype') == INVESTOR){

			$testmail = $this->AjaxModel->sendMatchPropertyMailToInvestor();
			//echo '<pre>'; print_r($testmail); die;

			$investorid = $this->session->userdata('userid');
			$getproposalByInvestorId = $this->UserModel->getproposalByInvestorId($investorid);
			  //echo '<pre>'; print_r(json_decode($getproposalByInvestorId)); die;
			$invessum = json_decode($getproposalByInvestorId);
			$suminve = array();
			$investormatchparoperty = array();
			$percetage = array();
			foreach ($invessum as $key=>$val){
				$suminve[] 	 =	$val->proposal_amount_for_investment;
				$percetage[] = 	($val->proposal_estimate_return/100)*$val->proposal_amount_for_investment;
				$cityid = $val->city_id;
                $streetid = $val->street_id;
                $trans_id = $val->trans_id;
                $proamount = $val->proposal_amount_for_investment;
                $return = $val->proposal_estimate_return;

                $matchproperty = $this->UserModel->getMatchAllPropertyByInvestorId($cityid,$streetid,$trans_id,$proamount,$return);
                $matcharr = json_decode($matchproperty);
                if (!empty($matcharr)){
                	$investormatchparoperty = $matcharr;
                }
			}
			//  echo '<pre>'; print_r(json_decode($matchpropertycount)); die;
			$totalinvessum = array_sum($percetage);
			$suminvestement = array_sum($suminve);
			$getsaveproperty = $this->UserModel->getsavepropertyByuInvestorId($investorid);
			$data = array(
							'userdata'			=>	$this->user_data,
							//'matchproperty'		=>	json_decode($this->investorProperty),
							'getproposalByInvestorId'	=>	json_decode($getproposalByInvestorId),
							'suminvestement'			=>	$suminvestement,
							'totalinvessum'				=>	$totalinvessum,
							'getsaveproperty'			=>	$getsaveproperty,
							'investormatchparoperty'	=>	$investormatchparoperty
						);
		

			$this->load->view('frontend/investorDashboard',$data);
		}
		else {
		    $this->session->set_flashdata('info', INFO_REGISTRATION);
			redirect(SITE_URL.'login');
		}
	}

	// function for Investor Join
	public function investorJoin()
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
			 						"user_type"		=>	INVESTOR,
			 						"status"		=>	INACTIVE,
			 						"created_date"	=>	TODAY_DATE
			 					);
			 		$insertquery = $this->db->insert("investex_user",$insertarray);
				 	if ($insertquery){
				 		$insertid = $this->db->insert_id();
				 		$user_email = $this->input->post("dealer_email");
				 		$verifyEmail = $this->AjaxModel->sendVerificationMail($insertid,$user_email);
				 		//echo '<pre>'; print_r($verifyEmail); die;
			 				$this->session->set_flashdata('info', INFO_REGISTRATION);
			 				//$this->session->set_flashdata('message', '');
			 				redirect(SITE_URL.'investorDashboard');
			 		}
			 		else {
			 			$this->session->set_flashdata('error', ERROR_REGISTRATION);
			 			redirect(SITE_URL.'investorJoin');
			 		}
					//return $sessiondata;
			 		//$sendEmail = $this->AjaxModel->sendVerificationMail($insertid,$useremail);
			 	//	echo '<pre>'; print_r($sendEmail); die;
			 	}

		  	$data['authURL'] =  $this->facebook->login_url();
	 		$this->load->view('frontend/investorJoin',$data);
 		// google client id => 319972561095-1mhhfn2alb836k3jrt7tvqa5ojr5squt.apps.googleusercontent.com
	 		// client secret => F-KstEgVR7vUTxfEvkm87P4B
		}
		else {
			redirect (SITE_URL.'index');
		}
		 //$this->load->view('frontend/investorJoin');
	}

	// function for Investor Registration
	public function investorRegistration()
	{
			$this->load->view('frontend/investorRegistration');

	}
	
	// insert proposal start here
	public function proposal()
	{
		if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR){
			$investerId = $this->session->userdata('userid');
			if (!empty($_POST)){

				//echo '<pre>'; print_r($_POST); die;
				$key = 'PROPOSAL_'.$investerId;
				$uniqueId = $this->UserModel->uniqueId($key);
				$insertarry = array(

					"investor_id"						=>	$investerId,
					"proposal_unique_id"				=>	$uniqueId,
					//"proposal_name"						=>	$this->input->post('proposal_name'),
					"proposal_transaction_type"			=>	$this->input->post('pro_transaction_type'),
					"proposal_country "					=>	$this->input->post('cityvalue'),
					"proposal_city "					=>	$this->input->post('cityvalue'),
					"proposal_street "					=>	$this->input->post('streetval'),
					"proposal_amount_for_investment"	=>	$this->input->post('pro_request_amount'),
					"proposal_estimate_return"			=>	$this->input->post('pro_estimate_return'),
					"created_date"						=>	TODAY_DATE,
				);

				$queryinsert = $this->db->insert("investex_investor_proposal",$insertarry);
				if ($queryinsert){

					redirect(SITE_URL.'investorDashboard');
					$this->session->set_flashdata("success",PROPOSAL_ADD_SUCCESS);
				}
				else {
					$this->session->set_flashdata("error",PROPOSAL_ADD_ERROR);	
				}
			}

			$data = array(
						'transaction_type'	=>	$this->transactionType,
						'allisrealcountry'	=>	$this->isrealcountry,
					);
			$this->load->view("frontend/proposal",$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here
	public function editproposal()
	{
		$propId = base64_decode($this->uri->segment(3));
		if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR){
			$getproposalById = $this->UserModel->getproposalById($propId);
			$investerId = $this->session->userdata('userid');
			if (!empty($_POST)){

				//echo '<pre>'; print_r($_POST); die;
				//$key = 'PROPOSAL_'.$investerId;
				//$uniqueId = $this->UserModel->uniqueId($key);
				$insertarry = array(

					"investor_id"						=>	$investerId,
					//"proposal_unique_id"				=>	$uniqueId, 
					"proposal_transaction_type"			=>	$this->input->post('pro_transaction_type'),
					"proposal_country "					=>	$this->input->post('proposal_name'),
					"proposal_city "					=>	$this->input->post('cityvalue'),
					"proposal_street "					=>	$this->input->post('streetval'),
					"proposal_amount_for_investment"	=>	$this->input->post('pro_request_amount'),
					"proposal_estimate_return"			=>	$this->input->post('pro_estimate_return'),
					"updated_date"						=>	TODAY_DATE,
				);

				$queryinsert = $this->db->where("id",$propId)->update("investex_investor_proposal",$insertarry);
				if ($queryinsert){
					redirect(SITE_URL.'investorDashboard');
					$this->session->set_flashdata("success",PROPOSAL_EDIT_SUCCESS);
				}
				else {
					$this->session->set_flashdata("error",PROPOSAL_EDIT_ERROR);
					redirect(SITE_URL.'editproposal/'.base64_encode($propId));	
				}
			}
			// echo '<pre>'; print_r(json_decode($getproposalById)); die;
			$data = array(
						'transaction_type'	=>	$this->transactionType,
						'allisrealcountry'	=>	$this->isrealcountry,
						'getproposalById'	=>	json_decode($getproposalById),
						'propId'			=>	$propId
					);
			$this->load->view("frontend/editproposal",$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// investor match property start here
	public function matchproperty()
	{
		$propid = base64_decode($this->uri->segment(3));
		if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR){
		$getproposaldata = $this->UserModel->getproposalById($propid);
		$getproposaldatajsn = json_decode($getproposaldata);
		$investorid = $this->session->userdata('userid');

		//echo '<pre>'; print_r($getproposaldatajsn); die;
		$cityid 	 = $getproposaldatajsn[0]->city_id;
        $streetid 	 = $getproposaldatajsn[0]->street_id;
        $trans_id 	 = $getproposaldatajsn[0]->trans_id;
        $proamount 	 = $getproposaldatajsn[0]->proposal_amount_for_investment;
        $return 	 = $getproposaldatajsn[0]->proposal_estimate_return;	
	
		$getproperty = $this->UserModel->getMatchAllPropertyByProposal($cityid,$streetid,$trans_id,$proamount,$return,$investorid);
		//$sendMatchPropertyMail = $this->AjaxModel->sendMatchPropertyMail($getproperty);
			// echo '<pre>'; print_r(json_decode($getproperty)); die;
			$data = array(
					'getproposaldatajsn'	=>	$getproposaldatajsn,
					'getproperty'			=>	json_decode($getproperty),
					'userdata'				=>	$this->user_data,
				);
			$this->load->view('frontend/matchproperty',$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here
	// invstor property start here
	public function investorproperty()
	{
		//echo $this->session->userdata('userid'); die;
		 if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR ){

			$proid = base64_decode($this->uri->segment(3));
			$propertydata = $this->UserModel->getpropertybyId($proid);

		//	echo '<pre>'; print_r(json_decode($propertydata)); die;
			$investorid = $this->session->userdata('userid');
			$getlikeofproperty = $this->UserModel->getPropertyLike($proid);
			$getviewofproperty = $this->UserModel->getPropertyView($proid);
			$getsaveproperty = $this->UserModel->getsaveproperty($proid,$investorid);

			if (empty(json_decode($propertydata))){
				redirect(SITE_URL.'investorDashboard');
			}
			else {
				$data = array(
						'userdata'			=>	 	$this->user_data,
						'propertybyId'		=>	 	json_decode($propertydata),
						'getlikeofproperty'	=>		$getlikeofproperty,
						'getviewofproperty'	=>		$getviewofproperty,
						'getsaveproperty'	=>		$getsaveproperty,
					);
		 	 //echo '<pre>'; print_r(json_decode($propertydata)); die;
				$this->load->view('frontend/investorproperty',$data);
			}

		}
		else
		{  
			redirect(SITE_URL.'login');
		}
	}
	// end here
	// investor estimate resturn list start here
	public function estimatereturn()
	{
		//$propid = base64_decode($this->uri->segment(3));
		if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR){
		$investorid = $this->session->userdata('userid');
		$getproposaldata = $this->UserModel->getproposalByInvestorId($investorid);
		$getproposaldatajsn = json_decode($getproposaldata);
		

		  //echo '<pre>'; print_r($getproposaldatajsn); die;
		$cityid 	 = $getproposaldatajsn[0]->city_id;
        $streetid 	 = $getproposaldatajsn[0]->street_id;
        $trans_id 	 = $getproposaldatajsn[0]->trans_id;
        $proamount 	 = $getproposaldatajsn[0]->proposal_amount_for_investment;
        $return 	 = $getproposaldatajsn[0]->proposal_estimate_return;	
	
		$getproperty = $this->UserModel->getMatchAllPropertyByProposal($cityid,$streetid,$trans_id,$proamount,$return,$investorid);
		// echo '<pre>'; print_r(json_decode($getproperty)); die;
			$data = array(
					'getproposaldatajsn'	=>	$getproposaldatajsn,
					'getproperty'			=>	json_decode($getproperty),
					'userdata'				=>	$this->user_data,
				);
			$this->load->view('frontend/estimatereturn',$data);
		}
		else {
			redirect(SITE_URL.'login');
		}
	}
	// end here
	public function matchdeal()
	{

	}

	// UNDER CONSIDERATION start here
	public function underconsideration()
	{
		if (!empty($this->session->userdata('userid'))  && $this->session->userdata('usertype') == INVESTOR){
			$invId = $this->session->userdata('userid');
			$getcondirationpro = $this->UserModel->getCondirationProByInvestorId($invId);
			//echo '<pre>'; print_r(json_decode($getcondirationpro)); die;
			$data = array(
					'userdata'				=>	$this->user_data,
					'getcondirationpro'		=>	json_decode($getcondirationpro)
				);
			$this->load->view('frontend/underconsideration',$data);
		}
		else {
			rediect(SITE_URL.'index');
		}
	}
	// end here
	// verify user email when sigh up new user
	public function verifyemail()
	{
		$userid = base64_decode($this->uri->segment(3));
		 //$userid = $this->uri->segment(3);
		 $email  = $this->uri->segment(4);

		$data = $this->AjaxModel->verifyemail($userid,$email);
		//echo '<pre>'; print_r($data);
		if (!empty($this->session->userdata('userid')))
		{
			$loginid = $this->session->userdata('userid');
			$usertype = $this->session->userdata('usertype');
			if ($usertype ==  DEALER){
 				$this->session->set_flashdata('success', SUCCESS_MAIL_VERIFY);
 				redirect(SITE_URL.'dealerdashboard');
			}
			else if ($usertype == INVESTOR){
 				$this->session->set_flashdata('success', SUCCESS_MAIL_VERIFY);
 				redirect(SITE_URL.'investorDashboard');
			}
		}
	}

}
