<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Contact_us_model extends CI_Model
{

	public function save_contact_data()
    {
		$data=array(
				'full_name'=> $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'subject'=> $this->input->post('subject'),
				'message'=> $this->input->post('message'),
				'date'=> date('Y-m-d')

			);
		
		if($this->db->insert('contact_us',$data))
		{
			$this->session->set_flashdata('success',"Message send successfully");
			redirect('Main_controller/Contact_us_view_controller','refresh');
		}

    }
}?>
