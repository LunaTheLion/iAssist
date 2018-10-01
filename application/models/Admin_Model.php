<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}
	public function get_new_projects()
	{
		$this->db->where('post_type', 'Project');
		$this->db->where('status', 0);
		$query = $this->db->get('post_tbl');
		return $query->result();
	}

	public function review_project()
	{
		$this->db->where('post_type', 'Project');
		$this->db->where('status', 0);
		$query = $this->db->get('post_tbl');	
			return $query->result();
	}

	public function get_users()
	{
			$this->db->limit(10);
			$this->db->order_by('account_id', 'DESC');
			$query = $this->db->get('account_tbl');
			return $query->result();
	}
	public function get_all_users()
	{
			
			$this->db->order_by('account_id', 'DESC');
			$query = $this->db->get('account_tbl');
			return $query->result();
	}

	public function get_info($email)
	{
		if(!empty($email))
		{
			$this->db->where('account_email', $email);
			$query2 = $this->db->get('account_tbl');	
	 		if(!empty($query2) && $query2->num_rows() > 0)
	 		{
				return $query2->row();

			}
			else
			{
			"No Result";
			}

		}
	}

	public function log($email,$var)
	{
		if(!empty($email))
		{
			$this->db->where('account_email', $email);
			$this->db->set('log_status', $var);
			$this->db->update('account_tbl');
			return $this->db->affected_rows() > 0;
		}
	}


	public function signup($email,$password)
	{
		$data = array(
			'account_email' => $email,
			'account_password' => $password,
			'account_type' =>'admin',
			 );
		$this->db->insert('account_tbl', $data);
		return true;
		$this->load->view('admin/header');
		$this->load->view('admin/sign-up');
		$this->load->view('admin/footer');
	}
	public function signin($email,$password)// check if the user has signed up
	{	
		   $this->db->where('account_password', $password);
		   $this->db->where('account_email', $email);
		   $query = $this->db->get('account_tbl');        

		if($query->num_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function account_status($email)//checking if the user has profile
	{
		$this->db->where('account_email', $email);
		$this->db->where('account_status', 1);
		$sql = $this->db->get('account_tbl');
		if($sql->num_rows()> 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function validate_profile($email,$post)
	{
		

		if(!empty($email))
		{

			$admin = array(
				'account_username' => $this->input->post('username'),
				'account_contact' => $this->input->post('contact'),
				'account_date_joined' => date('Y-m-d g:i'),
				'account_status' =>1,
			);

			$this->db->where('account_email',$email);
			$this->db->update('account_tbl', $admin);
			return $this->db->affected_rows() > 0;
		}	
	}
	public function getAllCollege()
	{
		$this->db->select('*');
		$this->db->where('delete_status', 0);
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('college_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function add_college()
		{
			
			$data = array(
				'college_name' => $this->input->post('CollegeName'),
				'college_acronym' => $this->input->post('CollegeCode'),
				'date_created' => date('Y-m-d g:i'),
				'status' => 0,
			);
			$this->db->insert('college_tbl', $data);
			if($this->db->affected_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	public function edit_college()
	{
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('college_tbl');
		if($query->num_rows() > 0)
		{
			 return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function update_college()
	{
		$id = $this->input->post('txtId');
		 $data = array(
				'college_name' => $this->input->post('CollegeName'),
				'college_acronym' => $this->input->post('CollegeCode'),
				'date_updated' => date('Y-m-d g:i'),
				
			);	
		$this->db->where('id', $id );
		$this->db->update('college_tbl',$data);
		if($this->db->affected_rows() > 0)
		{
			return true;
		} 
		else
		{
			return false;
		}

	}
	public function delete_college()
	{
		$id = $this->input->get('id');
		//$date = date('Y-m-d g:i');
		$this->db->where('id', $id);
		$hell0 = array(
			'delete_status' => 1,
			'delete_date' =>date('Y-m-d g:i'),
		);
		// $this->db->set('delete_status', 1);
		// $this->db->set('delete_date', $date);
		$this->db->update('college_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_college($code)
	{
		$this->db->select('*');
		$this->db->where('college_acronym', $code);
		$query = $this->db->get('college_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}


	public function get_courses()
	{
		$col = $this->input->get('code');
		$this->db->select('*');
		$this->db->where('college', $col);
		$this->db->where('delete_status', 0);
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('major_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}


	public function add_courses($data_in)
	{
		
		$this->db->insert('major_tbl',$data_in);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}


	public function edit_course()
	{
		$id = $this->input->get('id');
		$this->db->where('major_id', $id);
		$query = $this->db->get('major_tbl');
		if($query->num_rows() > 0)
		{
			 return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function update_course()
	{
		$id = $this->input->post('txtId');
		 $data = array(
				'course_code' => $this->input->post('ccode'),
				'course' => $this->input->post('course'),
				'college' => $this->input->post('txtCollege'),
				'date_updated' => date('Y-m-d g:i'),
				
			);	
		$this->db->where('major_id', $id );
		$this->db->update('major_tbl',$data);
		if($this->db->affected_rows() > 0)
		{
			return true;
		} 
		else
		{
			return false;
		}

	}
	public function delete_course()
	{
		$id = $this->input->get('id');
		$this->db->where('major_id', $id);
		$hell0 = array(
			'delete_status' => 1,
			'date_deleted' =>date('Y-m-d g:i'),
		);
		$this->db->update('major_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_new_jobs()
	{
		$this->db->where('post_type', 'Job');
		$this->db->where('status', 0);
		$query = $this->db->get('post_tbl');
		return $query->result();
	}
	public function view_jobs()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			 return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function view_projects()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			 return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function allow_job()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$hell0 = array(
			'status' => 1,
			'date_allowed_by_admin' =>date('Y-m-d g:i'),
			'admin' =>$this->session->userdata('username'),
		);
		$this->db->update('post_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function allow_projects()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$hell0 = array(
			'status' => 1,
			'date_allowed_by_admin' =>date('Y-m-d g:i'),
			'admin' =>$this->session->userdata('username'),
		);
		$this->db->update('post_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function delete_job()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$hell0 = array(
			'deleted' => 1,
			'date_deleted' =>date('Y-m-d g:i'),
		);
		$this->db->update('post_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function delete_projects()
	{
		$id = $this->input->get('id');
		$this->db->where('post_id', $id);
		$hell0 = array(
			'deleted' => 1,
			'date_deleted' =>date('Y-m-d g:i'),
		);
		$this->db->update('post_tbl', $hell0);
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}


?>