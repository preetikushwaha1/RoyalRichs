<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Forgot_pwd_model extends CI_Model
{
	
	function change_pass($email,$newPassword)
	{
		$update_pass=$this->db->query("UPDATE sign_up set password='$newPassword'  where email='$email'");
	}



}?>