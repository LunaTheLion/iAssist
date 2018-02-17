<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}

	public function review_project()
	{
		$this->db->where('project_admin_review', 0);
		$query = $this->db->get('freelance_project_tbl');	
			return $query->result();
	}

	public function get_users()
	{
			$this->db->limit(10);
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


	


}


?>