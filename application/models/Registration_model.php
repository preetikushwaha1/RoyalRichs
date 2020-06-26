<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Registration_model extends CI_Model
{
    public function save_data()
    {
	   $data = array(
	   	'fullname' => $this->input->post('full_name'),
	   	'email' => $this->input->post('email'),
	   	'username' => $this->input->post('usr_name'),
	   	'phone_no' => $this->input->post('phone_no'),
	   	//'password' => md5($this->input->post('pwd')), //md5 is for hash code 
	   	//'confirm_password' => md5($this->input->post('confirm_pwd'))
	   	'password' => $this->input->post('pwd'),
	   	'confirm_password' => $this->input->post('confirm_pwd'),
	   	'created_date'=>date('Y-m-d')
	);

	   
	   $this->db->insert('signup', $data);
    }
}?>