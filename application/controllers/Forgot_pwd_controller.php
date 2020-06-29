<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Forgot_pwd_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Forgot_pwd_model');
    }
    

    
    public function index()
  
    {   
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('new_pwd', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'required|matches[new_pwd]');

        if ($this->form_validation->run() == FALSE) 
         { 
           
             $error = "Please Try Again!";
             $this->load->view('Home_page/Main_header');
            $this->load->view('Forget_pwd'); 
            $this->load->view('Home_page/Main_footer'); 
         } 
         else
         {
              
                    $email=$this->input->post('email');
                    $newPassword=$this->input->post('new_pwd');
                    $confirmPassword=$this->input->post('confirm_pwd');

                    $que=$this->db->query("select * from signup  where email='$email'");
                    $row=$que->row();
                    if(!strcmp($newPassword, $confirmPassword))
                    {
                    
                         $this->load->model('Forgot_pwd_model');
                         $this->Forgot_pwd_model->change_pass($email,$newPassword,$confirmPassword);
                         $this->session->set_flashdata('success', "Password changed successfully");

                        //  $success = "Your Password Change successfully!";
                        $this->load->view('Home_page/Main_header');
                        //$this->load->view('Forget_pwd', compact('success'));
                        $this->load->view('Forget_pwd'); 
                        $this->load->view('Home_page/Main_footer'); 
                    }
                    else
                    {
                         // $success = "Invalid";
                        //$this->load->view('Forget_pwd', compact('success')); 
                         $this->session->set_flashdata('success', "Password changed successfully");
                          
                    }
                    
                

            
        }
    }
}
?>
 
