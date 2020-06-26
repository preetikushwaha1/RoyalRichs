<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Signup_body_controller extends CI_Controller 
{ 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->model('Registration_model'); 
         
    } 
      
	
    public function Registration() {
			
         /* Load form validation library */ 
        // $this->load->library('form_validation');
			
	 /* Validation rule */
		 $this->form_validation->set_rules('full_name', 'Full Name', 'required');
		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_customer');
		 $this->form_validation->set_rules('usr_name', 'Username', 'required');
		 $this->form_validation->set_rules('phone_no', 'Phone_number', 'required|min_length[10]');
		 $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]|max_length[15]');
		 $this->form_validation->set_rules('confirm_pwd', 'Password', 'required|matches[pwd]');		 
			
         if ($this->form_validation->run() == FALSE) 
         { 
            $error = "Please Try Again!";
            $this->load->view('Signup_body'); 

         } 
         else 
         { 
             $this->load->model('Registration_model');
		    $this->Registration_model->save_data();
		    $success = "Your account has been successfully created!";
                    $this->load->view('Signup_body', compact('success')); 
         } 

         $this->load->view('Home_page/Main_header');
		$this->load->view('Home_page/Main_footer');	
      }


	  public function check_customer($email)
	   {
	         $query = $this->db->where('email', $email)->get("signup");
		 if ($query->num_rows() > 0)
		    {
			 $this->form_validation->set_message('check_customer','The '.$email.' belongs to an existing account');
		        return FALSE;
		    }
		  else 
			  return TRUE;
	  }	
   }
?>