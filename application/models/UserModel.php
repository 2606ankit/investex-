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
			if ($result){
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
			$data = $this->db->select("*")
					->from("user_dealer_property")
					->where("dealer_id",$dealerid)
					->get();
			$res = $data->result();
			return json_encode($res);		
		}
		// end here
	}
?>