<?php

	class UserModel extends CI_Model
	{
		// login user
		public function userlogin($username,$userpass)
		{
			$data = $this->db->select("*")
					->from("investex_user")
					->where("username",$username)
					->where("password",$userpass)
					->where("status",ACTIVE)
					->get();
			$result = $data->result();
			 //echo $this->db->last_query(); die;
			if (!empty($result)){
				$updateslogintatus = $this->db->where("id",$result[0]->id)->update("investex_user",array("user_login_status"=> LOGIN_STATUS_ACTIVE)); 
				$selectuser = $this->db->select("*")->from("investex_user")->where("id",$result[0]->id)->get();
				$queryuser = $selectuser->result();

				if ($queryuser){
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
								'oauth_provider'	=>	$queryuser[0]->oauth_provider,
							);
					$sessiondata = $this->session->set_userdata($sessData);
					//echo '<pre>'; print_r($sessData); die;
					return $sessiondata;
					}
				}
			else {
				$masg = '';
				return $masg;
			}

		}
		// create Unique Id Start here
		public function uniqueId($usertype)
		{
			$time = substr(md5(strtotime(TODAY_DATE)),-3);
			$unique = $usertype.'_'.$time;
			return $unique;
		}

		// end here
		// get userdata by User id
		public function getUserdatabyId($loginid)
		{
			$data = $this->db->select("*")
					->from("investex_user")
					->where("id",$loginid)
					->get();
			$res = $data->result();
			return $res;		
		}
		// end here
		// Get All Real Transaction Type
		public function getTransactionType()
		{
			$data = $this->db->select("*")
					->from("investex_transaction_type")
					->where("status",ACTIVE)
					->get();
			$res = $data->result();
			return $res;		
		}

		// get all country
		public function getAllisrealcountry()
		{
			$data = $this->db->select("*")
					->from("city")
					->get();
			$res = $data->result();
			return $res;		
		}

		// get all city
		public function getAllCity()
		{
			$data = $this->db->select("*")
					->from("cities")
					->get();
			$res = $data->result();
			return $res;		
		}

		// get protperty according to the delaer id 
		public function getPropertyAccToDealerId($dealerid)
		{
			$data = $this->db->select("

									property.id as proId,
									property.dealer_id as dealer_id,
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
									property.status as status,
									property.created_date as created_date,

									city_tab.id as cityid,
									city_tab.name as cityname,

									street_tab.id as strid,
									street_tab.name as street_name,

									tran.id as transation_id,
									tran.transaction_name_en as transaction_name_en,
									tran.transaction_name_il as transaction_name_il

								")
					->from("user_dealer_property as property")
					->join("city as city_tab","city_tab.id = property.property_city")
					->join("street as street_tab","street_tab.id = property.property_street")
					->join("investex_transaction_type as tran","tran.id = property.property_transaction_type")
					->where("property.dealer_id",$dealerid)
					->where("property.status !=",STATUS_DELETE)
					->get();
			$res = $data->result();
			return json_encode($res);		
		}
		// end here

		// get property according to the property id
		public function getpropertybyId($proid)
		{
			$data = $this->db->select("

									iuser.id as user_id,
									iuser.first_name as first_name,
									iuser.last_name as last_name,


									property.id as proId,
									property.dealer_id as dealer_id,
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
									property.status as status,
									property.created_date as created_date,

									city_tab.id as cityid,
									city_tab.name as cityname,

									street_tab.id as strid,
									street_tab.name as street_name,

									tran.id as transation_id,
									tran.transaction_name_en as transaction_name_en,
									tran.transaction_name_il as transaction_name_il

								")
					->from("user_dealer_property as property")
					->join("investex_user as iuser","iuser.id = property.dealer_id")
					->join("city as city_tab","city_tab.id = property.property_city")
					->join("street as street_tab","street_tab.id = property.property_street")
					->join("investex_transaction_type as tran","tran.id = property.property_transaction_type")
					->where("property.id",$proid)
					->where("property.status !=",STATUS_DELETE)
					->get();
					//echo $this->db->last_query();
			$res = $data->result();
			return json_encode($res);
			 
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

		/* =============================
		 Investor function start here
		================================*/
		public function getMatchAllPropertyByInvestorId($cityid,$streetid,$trans_id,$proamount,$return)
		{
			$data = $this->db->select("*")
				->from("user_dealer_property")
				->where("status",Open_For_Investement)
				->where("property_street",$streetid)
				->where("property_city",$cityid)
				->where("property_transaction_type",$trans_id)
				->where("property_investment_amount",$proamount)
				->where("property_estimated_return",$return)
				->get();
			$res = $data->result();
			// echo $this->db->last_query(); die;
			return json_encode($res);	
		}
		//get all proposal start here
		public function getproposalByInvestorId($investorid)
		{
			$data = $this->db->select(
						 "
							proposal.investor_id as investor_id,
							proposal.id as propId,
							proposal.proposal_name as proposal_name,
							proposal.proposal_unique_id as proposal_unique_id,
							proposal.proposal_transaction_type as proposal_transaction_type,
							proposal.proposal_country as proposal_country,
							proposal.proposal_city as proposal_city,
							proposal.proposal_street as proposal_street,
							proposal.proposal_amount_for_investment as proposal_amount_for_investment,
							proposal.proposal_estimate_return as proposal_estimate_return,
							proposal.status as status,
							proposal.created_date as created_date,

							icity.id as city_id,
							icity.name as city_name,

							istreet.id as street_id,
							istreet.name as street_name,

							itrans.id as trans_id,
							itrans.transaction_name_en as transaction_name_en,
							itrans.transaction_name_il as transaction_name_il,
							itrans.status as trans_status,
						 "
						)
					->from("investex_investor_proposal as proposal")
					->join("city as icity","icity.id = proposal.proposal_city")
					->join("street as istreet","istreet.id = proposal.proposal_street")
					->join("investex_transaction_type as itrans","itrans.id = proposal.proposal_transaction_type")
					->where("proposal.investor_id",$investorid)
					->get();
			$res = $data->result();
			return json_encode($res);
		}
		// end here


		// get proposal data by Id
		public function getproposalById($proid)
		{
			$data = $this->db->select(
						 "
							proposal.investor_id as investor_id,
							proposal.id as propId,
							proposal.proposal_name as proposal_name,
							proposal.proposal_unique_id as proposal_unique_id,
							proposal.proposal_transaction_type as proposal_transaction_type,
							proposal.proposal_country as proposal_country,
							proposal.proposal_city as proposal_city,
							proposal.proposal_street as proposal_street,
							proposal.proposal_amount_for_investment as proposal_amount_for_investment,
							proposal.proposal_estimate_return as proposal_estimate_return,
							proposal.status as status,
							proposal.created_date as created_date,

							icity.id as city_id,
							icity.name as city_name,

							istreet.id as street_id,
							istreet.name as street_name,

							itrans.id as trans_id,
							itrans.transaction_name_en as transaction_name_en,
							itrans.transaction_name_il as transaction_name_il,
							itrans.status as trans_status,
						 "
						)
					->from("investex_investor_proposal as proposal")
					->join("city as icity","icity.id = proposal.proposal_city")
					->join("street as istreet","istreet.id = proposal.proposal_street")
					->join("investex_transaction_type as itrans","itrans.id = proposal.proposal_transaction_type")
					->where("proposal.id",$proid)
					->get();
					//echo $this->db->last_query();
			$res = $data->result();
			return json_encode($res);		
		}
		// end here
		
		// match all property accoding to the proposal
		public function getMatchAllPropertyByProposal($cityid,$streetid,$trans_id,$proamount,$return,$investorid)
		{
			$data = $this->db->select("
						iuser.status as userstatus,
						iuser.id as user_id,
						iuser.first_name as first_name,
						iuser.last_name as last_name,
						iuser.status as user_status,

						pro.id as id,
						pro.status as status,
						pro.dealer_id as dealer_id,
						pro.property_street as property_street,
						pro.property_city as property_city,
						pro.property_transaction_type as property_transaction_type,
						pro.property_investment_amount as property_investment_amount,
						pro.property_estimated_return as property_estimated_return,
						pro.created_date as created_date,
						pro.property_name as property_name,

						 
					 
				")
				->from("user_dealer_property as pro")
				->join("investex_user as iuser","iuser.id = pro.dealer_id")
				//->join("investex_transaction_type as itrans","itrans.id = pro.property_city")

				->where("pro.status",Open_For_Investement)
				->where("pro.property_street",$streetid)
				->where("pro.property_city",$cityid)
				->where("pro.property_transaction_type",$trans_id)
				->where("pro.property_investment_amount",$proamount)
				->where("pro.property_estimated_return",$return)
				->get();
			$res = $data->result();
			//  echo $this->db->last_query(); die;
			return json_encode($res);	
		}
		// end here

		//get porperty like start here
		public function getPropertyLike($proid)
		{
			$selectquery = $this->db->select("*")
									->from("property_like_dislike")
									->where("property_id",$proid)
									->where("protype",PROLIKE)
									->get();
					$ressel = $selectquery->result();
					return $ressel;
		}
		// end here
		//get porperty view start here
		public function getPropertyView($proid)
		{
			$selectquery = $this->db->select("*")
									->from("property_like_dislike")
									->where("property_id",$proid)
									->where("protype",PROVIEW)
									->get();
					$ressel = $selectquery->result();
					return $ressel;
		}
		// end here
		// get save job by investor id and property id
		public function getsaveproperty($proid,$investorid)
		{
			$selectquery = $this->db->select("*")
									->from("property_status_by_investor")
									->where("property_id",$proid)
									->where("investor_id",$investorid)
									->where("status",ACTIVE)
									->get();
					$ressel = $selectquery->result();
					return $ressel;

		}
		//end here
		// get save job by investor id and property id
		public function getsavepropertyByuInvestorId($investorid)
		{
			$selectquery = $this->db->select("*")
									->from("property_status_by_investor")
									->where("investor_id",$investorid)
									->where("status",ACTIVE)
									->get();
					$ressel = $selectquery->result();
					return $ressel;

		}
		//end here

		// get condiration property by invester id
		public function getCondirationProByInvestorId($invId)
		{
			$data = $this->db->select("
							prostatus.id as id,
							prostatus.property_id as property_id,
							prostatus.investor_id as investor_id,
							
							property.id as pId,
							property.dealer_id as dealer_id,
							property.property_unique_id as property_unique_id,
							property.property_name as property_name,
							property.property_text as property_text,
							property.property_latitude as property_latitude,
							property.property_longtitue as property_longtitue,
							property.property_street as property_street,
							property.property_city as property_city,
							property.property_transaction_type as property_transaction_type,
							property.property_price as property_price,
							property.property_investment_amount as property_investment_amount,
							property.property_estimated_return as property_estimated_return,
							property.status as status,
							property.created_date as created_date,

							iuser.id as dealerUserid,
							iuser.first_name as first_name,
							iuser.last_name as last_name,



						")
					->from("property_status_by_investor as prostatus")
					->join("user_dealer_property as property","property.id = prostatus.property_id")
					->join("investex_user as iuser","iuser.id = property.dealer_id")
					->where("prostatus.investor_id",$invId)
					->get();
				//	echo $this->db->last_query(); die;
			$res = $data->result();
			return json_encode($res);		
		}
		// end here
	}
?>