<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Forgot_pwd_model extends CI_Model
{
	
	function change_pass($email,$newPassword,$confirmPassword)
	{
		$update_pass=$this->db->query("UPDATE signup set password='$newPassword' , confirm_password='$confirmPassword' where email='$email'");
		
	}



}?>