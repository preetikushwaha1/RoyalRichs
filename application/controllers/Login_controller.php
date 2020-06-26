<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Login_controller extends CI_Controller 
{ 
     
    function __construct() 
    { 
        parent::__construct(); 
    } 

     public function index() 
      {
			
         /* Load form validation library */ 
        // $this->load->library('form_validation');
			
	 /* Validation rule */
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	 $this->form_validation->set_rules('pwd', 'Password', 'required');	 
			
         if ($this->form_validation->run() == FALSE) 
         { 
         	$this->load->view('Home_page/Main_header');
            $this->load->view('Home_page/Main_body'); 
           	$this->load->view('Home_page/Main_footer');
         } 
         else 
         { 
			$this->load->model('Login_model');
			$result = $this->Login_model->login();
			if ($result > 0)
			{
				redirect('Main_controller/dashboard_controller');
			}
			else 
			  { 
				$msg = "The email or password you entered is incorrect.";
				$this->load->view('Home_page/Main_header');
				$this->load->view('Home_page/Main_body', compact('msg'));
				$this->load->view('Home_page/Main_footer');
			  } 
			}
	} 

 }
 ?>
      
	