<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}

	public function signup($email,$password)
	{
		$data = array(
			'account_email' => $email,
			'account_password' => $password,
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

	public function accountstatus($email)//checking if the user has profile
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
	public function validateprofile($username,$contact)
	{
		echo $username."<br>";
		echo $contact."<br>";
	}


	


}


?>