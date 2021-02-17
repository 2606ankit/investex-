<?php

	class AjaxModel extends CI_Model
	{
		public function __construct()
		{
			$data = array();
		    parent::__construct();
		    // load library form validation
		    $this->load->library('form_validation');
		   	$this->load->helper('url');
		   	$this->load->library('pagination');
		   	$this->load->library('email'); 

		}
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
					//echo $this->db->last_query(); die;
			$res = $data->result();
			return $res;		
		}
		// end here

		// Send verification Email Start From here
		public function sendVerificationMail($insertid,$useremail)
		{
			$from_email = ADMIN_EMAIL;
			$data	=	(object) array('insertid'=>$insertid,'useremail'=>$useremail);
				   
				$this->load->library('email');
 				    $config['protocol'] = 'sendmail';                                                         
				    $config['charset']    	= 'utf-8';
				    $config['newline']    	= "\r\n";
				    $config['mailtype'] 	= 'html';  
				    $config['priority'] 	= '1'; 			   
				    $this->email->initialize($config);
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
		// send match property mail to invstor and dealer
		public function sendMatchPropertyMailToInvestor()
		{
			$data = $this->db->select("

							property.dealer_id as dealer_id,
							property.property_unique_id as property_unique_id,
							property.property_name as property_name,
							property.property_text as property_text,
							property.property_details as property_details,
							property.property_image as property_image,
							property.property_address as property_address,
							property.property_latitude as property_latitude,
							property.property_longtitue as property_longtitue,

							property.property_street as property_street,
							property.property_city as property_city,
							property.property_transaction_type as property_transaction_type,
							property.property_price as property_price,
							property.property_investment_amount as property_investment_amount,
							property.property_estimated_return as property_estimated_return,


							proposal.investor_id as investor_id,
							proposal.proposal_name as proposal_name,
							proposal.proposal_unique_id as proposal_unique_id,
							proposal.proposal_transaction_type as proposal_transaction_type,
							proposal.proposal_country as proposal_country,
							proposal.proposal_city as proposal_city,
							proposal.proposal_street as proposal_street,
							proposal.proposal_amount_for_investment as proposal_amount_for_investment ,
							proposal.proposal_estimate_return as proposal_estimate_return,
							proposal.status as proposal_status,

							iuser.id as inv_id,
							iuser.user_email as user_email,
							iuser.first_name as first_name,
							iuser.last_name as last_name,

							icity.id as city_id,
							icity.name as cityname,

							istr.id as street_id,
							istr.name as name,

						")
					->from("user_dealer_property as property")
					->join("investex_investor_proposal as proposal","proposal.proposal_transaction_type = property.property_transaction_type AND proposal.proposal_city = property.property_city AND proposal.proposal_street = property.property_street AND proposal.proposal_amount_for_investment = property.property_investment_amount AND proposal.proposal_estimate_return = property.property_estimated_return")

					->join("investex_user as iuser","iuser.id = proposal.investor_id")
					->join("city as icity","proposal.proposal_city = icity.id")
					->join("street as istr","proposal.proposal_street = istr.id")
					->get();
				$res = $data->result();
				return $res; 
 				
 				 
		}
		// end here
		// get city by id
		public function getcitybyid($cityid)
		{
			$data = $this->db->select("*")
					->from("city")
					->where("id",$cityid)
					->get();
					 
			$res = $data->result();
			return $res;
		}
		// end here
		// get street by id
		public function getstreetbyid($strid)
		{
			$data = $this->db->select("*")
					->from("street")
					->where("id",$strid)
					->get();
					 
			$res = $data->result();
			return $res;
		}
		// end here
		// get deal type by id 
		public function getDealTypeById($dealtype)
		{
			$data = $this->db->select("*")
					->from("investex_transaction_type")
					->where("id",$dealtype)
					->get();
					 
			$res = $data->result();
			return $res;
			
		}
		// end here
		// send mail for New added property or proposal 
		public function sendMailProperty($type)
		{
			
		}
		// end here
		// verify Email 
		public function verifyemail($userid,$email)
		{
			$udpatedata = array("status"=>ACTIVE);
			$wherecon = array("id"=>$userid,"user_email"=>$email);
			$data = $this->db->where($wherecon)->update("investex_user",$udpatedata);
			//echo $this->db->last_query(); die;
			if ($data){

				$updateslogintatus = $this->db->where("id",$userid)->update("investex_user",array("user_login_status"=> LOGIN_STATUS_ACTIVE)); 

				$userdata = $this->db->select("*")
							->from("investex_user")
							->where("id",$userid)
							->get();
				$queryuser = $userdata->result();			
				$sessData = array
						(						
							'fname' 	=> 	$queryuser[0]->first_name,
							'lname' 	=> 	$queryuser[0]->last_name,
							'userid'	=> 	$queryuser[0]->id,
							'username'	=>	$queryuser[0]->username,		
							'useremail'	=>	$queryuser[0]->user_email,		
							'usertype'	=>	$queryuser[0]->user_type,
							'userimage'	=>	$queryuser[0]->user_image,
							'userphone'	=>	$queryuser[0]->user_phone,
							'userloginstatus'	=>	$queryuser[0]->user_login_status,
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
		// delete proposal start here
		public function deleteProposal($delid)
		{
			$update = array("status"=>STATUS_DELETE);
			$data = $this->db->where("id",$delid)->update("investex_investor_proposal",$update);
			
			if ($data){
				return true;
			}
		}
		// end here

		// property like start here
		public function propertylike($propertyid,$investorid)
		{
			$selectdata = $this->db->select("*")
							->from("property_like_dislike")
							->where("property_id",$propertyid)
							->where("created_by",$investorid)
							->where("protype",PROLIKE)
							->get();
			$data = $selectdata->result();
			if (empty($data)){
				$insertlike = array(
									"property_id"	=>	$propertyid,
									"property_like"	=>	'1',
									"property_view"	=>	'1',
									"created_by"	=>	$investorid,
									"protype"		=>	PROLIKE,
									"status"		=>	ACTIVE,
									"created_date"	=>	TODAY_DATE
								);
				$queryinsert = $this->db->insert("property_like_dislike",$insertlike);
				if ($queryinsert)
				{
					$selectquery = $this->db->select("*")
									->from("property_like_dislike")
									->where("property_id",$propertyid)
									->where("protype",PROLIKE)
									->get();
					$ressel = $selectquery->result();
					return count($ressel);
				}
			}
			else {
				$wherecon = array
							(	
								"property_id"	=>	$propertyid,
								"created_by" 	=>	$investorid,
								"protype"    	=>	PROLIKE
							);

				$deletelike = $this->db->where($wherecon)->delete("property_like_dislike");
				if ($deletelike)
				{
					$selectquery = $this->db->select("*")
								->from("property_like_dislike")
								->where("property_id",$propertyid)
								->where("protype",PROLIKE)
								->get();

					$ressel = $selectquery->result();
					return count($ressel);

				}
			}				
		}
		// end here
		// property view acc to the investorid
		public function propetryview($viewpropertyid,$viewinvestorid)
		{
			$select = $this->db->select("*")
					->from("property_like_dislike")
					->where("property_id",$viewpropertyid)
					->where("created_by",$viewinvestorid)
					->where("protype",PROVIEW)
					->get();
			$query = $select->result();
			if (empty($query))
			{
				$insertview = array(
								'property_id'	=> $viewpropertyid,
								'property_view'	=> '1',
								'created_by'	=> $viewinvestorid,
								'protype'		=> PROVIEW,
								"status"		=>	ACTIVE,
								"created_date"	=>	TODAY_DATE
							);
				$queryinsert = $this->db->insert("property_like_dislike",$insertview);
				if ($queryinsert){
					$select = $this->db->select("*")
							->from("property_like_dislike")
							->where("property_id",$viewpropertyid)
						 
							->where("protype",PROVIEW)
							->get();
					$query = $select->result();
					return count($query);
				}
			}
			else {
					$select = $this->db->select("*")
							->from("property_like_dislike")
							->where("property_id",$viewpropertyid)
						 	->where("protype",PROVIEW)
							->get();
					$query = $select->result();
					return count($query);
			}

		}
		// end here

		// save property by investir start here
		public function savePropertyByinvestor($viewpropertyid,$viewinvestorid)
		{
			$data = $this->db->select("*")
					->from("property_status_by_investor")
					->where("property_id",$viewpropertyid)
					->where("investor_id",$viewinvestorid)
					->get();
			$res = $data->result();
			if (empty($res)){
				$insert = array(
							"property_id"	=>	$viewpropertyid,
							"investor_id"	=>	$viewinvestorid,
							"status"		=>	ACTIVE,
							"created_date"	=>	TODAY_DATE,
						);
				$query = $this->db->insert("property_status_by_investor",$insert);
				if ($query){
					echo 'Job save successfully';
				}
			}		
		}
		// end here
	}
?>