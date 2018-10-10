<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}

	public function get_username($email)
	{
		if(!empty($email))
	 	{
	 		$this->db->where('account_email', $email);	
	 		$query= $this->db->get('account_tbl'); 		
	 		    if($query->num_rows() == 1)
	 		    {
	 		        return $query->row();
	 		    }
	 		    return false;
	 	}
	}

	public function signin($email,$password)// check if the user has signed up
	{	
		   $this->db->where('account_password', $password);
		   $this->db->where('account_email', $email);
		   $this->db->set('log_status', 1);// TRY THISSSS LUNA
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
		if($sql->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function check_account($email)
	{
		$this->db->where('account_email', $email);
		$this->db->where('confirm_code', 'review');
		$sql = $this->db->get('account_tbl');
		if($sql->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function signup($username,$email,$password, $pass)
	{
		$data = array(
			'account_type' => 'freelance',
			'log_status' =>1,
			'account_username' => $username,
			'account_email' => $email,
			'account_password' => $password,
			'account_date_joined' => date('Y-m-d H:i:s'),
			'verification_code' => $pass,
			 );
		$this->db->insert('account_tbl', $data);
		return true;
		$this->load->view('templates/header');
		$this->load->view('pages/sign-up');
		$this->load->view('templates/footer');

	}


}


?>