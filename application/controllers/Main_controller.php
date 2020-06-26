<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controller extends CI_Controller
 {
 	 function __construct()
 	 {
 	 	parent::__construct();
 	 	//$this->load->helper('url');
 	 //	$this->load->model('Signup_model');
 	 //	$this->load->library('session');
 	 }

	public function index()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Home_page/Main_body');
		$this->load->view('Home_page/Main_footer');
	}

	public function Robo_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Robo_view');
		$this->load->view('Home_page/Main_footer');
	}

	public function Training_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Training_view');
		$this->load->view('Home_page/Main_footer');
	}

	public function Demate_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Demate_view');
		$this->load->view('Home_page/Main_footer');
	}


	public function Donate_plants_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Donate_plants_view');
		$this->load->view('Home_page/Main_footer');
	}


	public function Portfolio_view_page_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Portfolio_view_page');
		$this->load->view('Home_page/Main_footer');
	}

	public function Result_view_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Result_view');
		$this->load->view('Home_page/Main_footer');
	}

	public function Contact_us_view_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Contact_us_view');
		$this->load->view('Home_page/Main_footer');
	}



	public function Team_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Team_view');
		$this->load->view('Home_page/Main_footer');
	}


/*-============signup_controller-=================================================================*/

	public function Signup_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Signup_body');
		$this->load->view('Home_page/Main_footer');	

	}


	public function forget_pwd_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Forget_pwd');
		$this->load->view('Home_page/Main_footer');	
	}

	public function About_us_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('About_us_view');
		$this->load->view('Home_page/Main_footer');	
	}




/*===============dashboard controllers===============================================================================*/
	public function dashboard_controller()
	{
		$this->load->view('Dashboard_templates/Dashboard_header');
		$this->load->view('Dashboard_templates/Sidebar');
		$this->load->view('Dashboard_templates/Dashboard_body');
		$this->load->view('Dashboard_templates/Dashboard_footer');
	
	}

}
