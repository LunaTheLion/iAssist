<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}
	public function result()
	{
		echo $this->input->post('search');
	}
	public function get_email($id)
	{
		if(!empty($id))
		{
			
			$this->db->where('id', $id);
			$query= $this->db->get('freelance_project_tbl'); 		
			return $query->row();
		}
	}
	public function get_post($id)
	{
		if(!empty($id))
		{
			$this->db->where('id', $id);
			$q = $this->db->get('freelance_project_tbl');
			return $q->result();
		}
	}
	
	public function get_owner($email)
	{
		if(!empty($email))
		{
			$this->db->where('account_email', $email);
			$q = $this->db->get('account_tbl');
			return $q->result();
		}
	}
	public function get_more_proj($email)
	  {
	  	if(!empty($email))
	  	{
	  		$this->db->limit(4);
	  		$this->db->order_by('id', 'DESC');
	  		$this->db->where('project_publisher', $email);
	  		$q = $this->db->get('freelance_project_tbl');
	  		return $q->result();
	  	}
	  }
	
	


}


?>