<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_doc_model extends CI_Model
{
	public function delete_function($document_id)
	{

	 $this->db->delete('upload_doc_table',array('document_id'=>$document_id));
	 return;

	}
}