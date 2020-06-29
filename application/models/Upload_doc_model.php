<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_doc_model extends CI_Model
{

	
	public function getUpload()
	{
		$date=date('Y-m-d');
		$doc_title=$this->input->post('title');
			
		
		$data = array(
			'upload_date'=>$date,	
			'doc_title'=>$doc_title,
			'upload_document'=> 'x',
			'status'=>1					
			);
			$this->db->insert('upload_doc_table',$data);
				
	$document_id = $this->db->insert_id();
	$path_id = $this->upload_doc_function();

	$this->db->where('document_id', $document_id);
		$data = array(
			'upload_document'=> $path_id		// here upload document is a column in database
				);

		$this->db->update('upload_doc_table', $data);		// here upload document is a table name in database
		
	}

	public function upload_doc_function()
	{

		if(isset($_FILES['upload_doc']['name']))
			{
				clearstatcache();
				$config=array(
				'upload_path'=>'./assets/Uploads/',
				'allowed_types'=>'pdf|xlsx|docx|jpg|png|csv',
				'file_name'=>date('YmdHms').'_'.rand(1,999999),
				'overwrite'=>TRUE,
				);

			$this->load->library('upload',$config);
			if($this->upload->do_upload('upload_doc'))
			{
				$uploaded=$this->upload->data();
				//var_dump($uploaded);die();
				$path_=$uploaded['file_name'];
			}
			else
			{
	       		 $path_='invalid_document';
	       		
	   		 }
	   	return  $path_;
		}
		//echo $this->db->last_query();
	}

	public function download_document( )
		{
		
		$this->db->distinct('document_id ');
		$this->db->select('*');
		$this->db->from('upload_doc_table');
		$q = $this->db->get();
		return $q->result();
		}


}?>

