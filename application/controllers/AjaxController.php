<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {

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
	   	$this->load->model('AjaxModel');
	   	$this->load->library('email'); 

	}

	// check username start here
	public function checkusername()
	{
		$dealer_username = $_POST['dealer_username'];
		$data = $this->AjaxModel->checkDelaerusername($dealer_username);
		if (empty($data)){
			echo 'true';
		}else {
			echo 'false';
		}
	}
	// end here  
	// check user email start here
	public function checkemail()
	{
		$dealer_email = $_POST['dealer_email'];
		$data = $this->AjaxModel->checekDealerEmail($dealer_email);
		if (empty($data)){
			echo 'true';
		}else {
			echo 'false';
		}

	}
	// end here 

	// get city by country id
	public function getCityByCountryId()
	{
		$cityname = $_POST['cityname'];
		$data = $this->AjaxModel->getstreetByCityId($cityname);
			$html = '';
		 foreach ($data as $k=>$v){
		 	$html .= '<li class="mdc-list-item mdc-list-item--selected prostreet" data-value="'.$v->id.'">'.$v->name.'</li>';
		 }
		 echo $html;
	}
	// end here

	// delete property start here
	public function deleteProperty()
	{
		$delid = $_POST['delid'];
		$data = $this->AjaxModel->deleteProperty($delid);
		 print_r($data); 
	}
	// end here
	// delete property Start here
	public function deleteProposal()
	{
		$delid = $_POST['delid'];
		$data = $this->AjaxModel->deleteProposal($delid);
		 print_r($data); 
	}

	// end here

	// check password to change password user profile
	public function checkPassword()
	{
		$loginid = $this->session->userdata('userid');
		$currentpassword = $_POST['currentpassword'];
		$checkpass = $this->AjaxModel->checkPassword($currentpassword,$loginid);
		 //echo '<pre>'; print_r($checkpass); die;
		if (!empty($checkpass)){
			echo 'true';
		}else {
			echo 'false';
		}
	}
	// end here

	// proerpty like function start here
	public function propertylike()
	{
		$investorid = $_POST['investorid'];
		$propertyid = $_POST['propertyid'];
		$data = $this->AjaxModel->propertylike($propertyid,$investorid);
		print_r($data);
	}
	// end here
	// property view start here
	public function propetryview()
	{
		$viewpropertyid = $_POST['viewpropertyid'];
		$viewinvestorid = $_POST['viewinvestorid'];
		$data = $this->AjaxModel->propetryview($viewpropertyid,$viewinvestorid);
		print_r($data);
	}
	// end here

	// save property start here
	public function savePropertyByinvestor(){
		$viewpropertyid = $_POST['propertyid'];
		$viewinvestorid = $_POST['investorid'];
		$data = $this->AjaxModel->savePropertyByinvestor($viewpropertyid,$viewinvestorid);
		print_r($data);
	}
	// end here
 }
?>