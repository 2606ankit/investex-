<?php

	class AjaxModel extends CI_Model
	{

		// check Username for dealer joining time
		public function checkDelaerusername($dealer_username)
		{
			$checkuser = $this->db->select("username")
							->from("investex_user")
							->where("username",$dealer_username)
							->get();
			$res = $checkuser->result();
			return $res;
		}

		// check user email start here
		public function checekDealerEmail($dealer_email)
		{
			$checkuser = $this->db->select("user_email")
							->from("investex_user")
							->where("user_email",$dealer_email)
							->get();
			$res = $checkuser->result();
			return $res;
		}
		// end here
		// checck username for user profile to change password start here
		public function checkPassword($currentpassword,$loginid)
		{
			$data = $this->db->select("*")
					->from("investex_user")
					->where("password",md5($currentpassword))
					->where("id",$loginid)
					->get();
					 
			$res = $data->result();
					
		}
		// end here

		// Send verification Email Start From here
		public function sendVerificationMail($insertid,$useremail)
		{
			$from_email = ADMIN_EMAIL;
			$data	=	(object) array('insertid'=>$insertid,'useremail'=>$useremail);
				
				/*$config['charset']    	= 'utf-8';
			    $config['newline']    	= "\r\n";
			    $config['mailtype'] 	= 'html';  
			    $config['priority'] 	= '1'; 			   
			   


			     $this->email->initialize($config);*/
			   	
			   	$mailmessage = $this->load->view('template/email',$data,TRUE);
				// echo '<pre>'; print_r($mailmessage); die;


			  	 $this->email->from($from_email, 'Your Name'); 
		         $this->email->to($useremail);
		         $this->email->subject('Email Test'); 
		         $this->email->message($mailmessage);
		   


		         //Send mail 
		         if($this->email->send()) 
		         {
		         	return TRUE;
		         	//echo $this->email->print_debugger();
		         }
		         else {
		         	return $this->email->print_debugger();
		         }
		}
		// end here

		// verify Email 
		public function verifyemail($userid,$email)
		{
			$udpatedata = array("status"=>ACTIVE);
			$wherecon = array("id"=>$userid,"user_email"=>$email);
			$data = $this->db->where($wherecon)->update("investex_user",$udpatedata);
			if ($data){

				$userdata = $this->db->select("*")
							->from("investex_user")
							->where("id",$userid)
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
				return $sessiondata;
			}
		}

		// get city by country id
		public function getstreetByCityId($cityname)
		{
			$data = $this->db->select("*")
					->from("street")
					->where("city_id",$cityname)
					->get();
			$res = $data->result();
			return $res;
		}
		// end here

		// delete property start here
		public function deleteProperty($delid)
		{
			$update = array("status"=>STATUS_DELETE);
			$data = $this->db->where("id",$delid)->update("user_dealer_property",$update);
			//echo $this->db->last_query(); die;
			if ($data){
				return true;
			}
		}
		// end here
	}
?>