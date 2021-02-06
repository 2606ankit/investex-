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
					->where("property.id",$proid)
					->where("property.status !=",STATUS_DELETE)
					->get();
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
	}
?>