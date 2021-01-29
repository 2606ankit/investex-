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

	}

	public function index()
	{
		$this->load->view('frontend/index');
	}

	// function for joining dealer
	public function dealerjoin()
	{
		$this->load->view('frontend/dealerjoin');
	}

	// function for dealer Registration
	public function dealerRegistration()
	{
		$this->load->view('frontend/dealer_registration');
	}

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

}
