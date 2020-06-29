<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_controller extends CI_Controller
 {
 	 function __construct()
 	 {
 	 	parent::__construct();
 	 //	 if(!$this->session->userdata('admin')) redirect('Login_controller');
 	 	//$this->load->helper('url');
 	 //	$this->load->model('Signup_model');
 	 	//$this->load->library('session');
 	 	//$this->load->model('Contact_us_model');

 	 	$this->load->model('Upload_doc_model');
 	 	$this->load->model('Delete_doc_model');
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

/*====================contact us========================================*/

	public function Contact_us_view_controller()
	{
		$this->load->view('Home_page/Main_header');
		$this->load->view('Contact_us_view');
		$this->load->view('Home_page/Main_footer');
	}

	public function Contact_us_save_controller()
	{

		$this->Contact_us_model->save_contact_data();
	}

/*===============================================================================*/


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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Main_controller/index');
	}

/*================================================================================================================*/
/*======================upload document================================================================*/
	public function upload_doc_controller()
	{
		$this->form_validation->set_rules('upload_document', 'Upload Document', 'required');
	 	$this->form_validation->set_rules('doc_title', 'Document Title', 'required');
	 	 if($this->form_validation->run()==FAlSE)
	 	 {
	
	 	 		$data['downloads'] = $this->Upload_doc_model->download_document();
	 	 		$this->load->view('Dashboard_templates/Dashboard_header');
				$this->load->view('Dashboard_templates/Sidebar');
				$this->load->view('Upload_form',$data);
				$this->load->view('Dashboard_templates/Dashboard_footer');

	 	 }
	 	 else
	 	 {
	 	 		

				$data['downloads'] = $this->Upload_doc_model->download_document();
				$this->load->view('Dashboard_templates/Dashboard_header');
				$this->load->view('Dashboard_templates/Sidebar');
				$this->load->view('Upload_form',$data);
				$this->load->view('Dashboard_templates/Dashboard_footer');
				
		}
	}

	public function save_doc_controller()
	{
		
		$this->Upload_doc_model->getUpload();
		redirect('Main_controller/upload_doc_controller');

	}



	public function delete_document($document_id)
	{
	 	if(!$this->Delete_doc_model->delete_function($document_id))
	 	{

	 		$this->session->set_flashdata('file_delete','Record Deleted Successfully');
	 		redirect('Main_controller/upload_doc_controller');

	 	}
	 	else
	 	{
	 		$this->session->set_flashdata('file_delete','Failed to Delete Record!, Please Try again');
	 		redirect('Main_controller/upload_doc_controller');
	 	}

	}

}
