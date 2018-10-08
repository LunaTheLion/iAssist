<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}
	public function search()
	{
		$word =  $this->input->post('search');
		//echo $word;
		// $this->db->select('*');
		// $this->db->like('title' , $word);
		// $this->db->or_like('freelance_skill_table.skill', $word);
		// $this->db->join('freelance_skill_table', 'freelance_skill_table.skill')

		$this->db->select('*');
		$this->db->from('freelance_project_tbl');
		$this->db->like('title', $word);
		$query =  $this->db->get();
		if($query->result_array() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
		
	}
	public function view_project_if_not_user($title_slug,$id)
	{
		$email = $this->session->userdata('email');
		$this->db->select('*');
		$this->db->where('creator', $email);
		$this->db->where('post_id', $id);
		$this->db->from('post_tbl');
		$this->db->join('account_tbl', 'account_email = creator', 'right');
		$get = $this->db->get();
		if($get->result_array() > 0)
		{
			return $get->result();
		}
		else
		{
			return false;
		}
	}

	public function get_account_info($email)
	{
		$this->db->select('*');
		$this->db->where('account_email', $email);
		$this->db->where('status','complete');
		$hey = $this->db->get('account_tbl');
		
		if($hey->result_array() > 0)
		{
			return $hey->result();
		}
		else
		{
			return false;
		}

	}
	public function view_project($title_slug, $id)
	{
		$this->db->where('post_id', $id);
		$this->db->where('title_slug', $title_slug);
		$query = $this->db->get('freelance_project_tbl');
		if($query->result_array() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function search_job_criteria()
	{
		$data1 = $this->input->post('category');
		$data2 = $this->input->post('budget');
		$data3 = $this->input->post('searchInput');
		
		if(empty($data2))
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('status', '1');
			$query = $this->db->get('freelance_job_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('budget <=', $this->input->post('budget') );
			$this->db->where('status', '1');
			$query = $this->db->get('freelance_job_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
	}
	public function search_skill_criteria()
	{
		$data1 = $this->input->post('category');
		$data2 = $this->input->post('budget');
		$data3 = $this->input->post('searchInput');
		if(empty($data2))
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('status', '1');
			$query = $this->db->get('freelance_project_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('budget <=', $this->input->post('budget') );
			$this->db->where('status', '1');
			$query = $this->db->get('freelance_project_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
	}
	public function search_request_criteria()
	{
		$data1 = $this->input->post('category');
		$data2 = $this->input->post('budget');
		$data3 = $this->input->post('searchInput');
		if(empty($data2))
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('status', '1');
			$query = $this->db->get('project_request_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		else
		{
			$this->db->select('*');
			$this->db->where('category', $this->input->post('category') );
			$this->db->where('budget <=', $this->input->post('budget') );
			$this->db->where('status', '1');
			$query = $this->db->get('project_request_tbl');
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
	}
	public function view_job($title_slug, $id)
	{
		$this->db->where('post_id', $id);
		$this->db->where('title_slug', $title_slug);
		$query = $this->db->get('freelance_job_tbl');
		if($query->result_array() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function get_project_owner($id)
	{
		//echo $id;
		$this->db->select('creator');
		$this->db->where('post_id', $id);
		$data = $this->db->get('freelance_project_tbl');
		if($data->result_array() > 0 )
		{
			return $data->row();
		}
		else
		{
			return false;
		}
	}
	public function get_job_owner($id)
	{
		//echo $id;
		$this->db->select('creator');
		$this->db->where('post_id', $id);
		$data = $this->db->get('freelance_job_tbl');
		if($data->result_array() > 0 )
		{
			return $data->row();
		}
		else
		{
			return false;
		}
	}
	public function get_skill()
	{
		$this->db->select('*');
		$this->db->where('status' , 1);
		$query = $this->db->get('freelance_project_tbl');
		return $query->result();
	}
	public function get_requests()
	{
		$this->db->select('*');
		$this->db->where('request_status' , 0);
		$query = $this->db->get('project_request_tbl');
		return $query->result();
	}
	public function get_jobs()
	{
		$this->db->select('*');
		$this->db->where('status' , 1);
		$query = $this->db->get('freelance_job_tbl');
		return $query->result();
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