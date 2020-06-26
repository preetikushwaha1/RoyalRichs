<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Login_model extends CI_Model
{

	public function login()
    {
	   $email = $this->input->post('email');
	   //$password = md5($this->input->post('pwd'));
	   $password = $this->input->post('pwd');

	   $query = $this->db->where(['email' => $email, 'password' => $password])->get('signup');
	   return (int) $query->num_rows();
    }
}?>