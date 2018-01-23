<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

	public function __construct(){
		parent::__construct();	
		
	}
	public function account_info($account_info, $email)
	{
		if(!empty($account_info))
		{
			$this->db->where('account_email',$email);
			$this->db->update('account_tbl', $account_info);
			return $this->db->affected_rows() > 0;
		}	
		
	 }

	 public function get_account_info($email)
	 {
	 	if(!empty($email))
	 	{
	 		$this->db->where('account_email', $email);
	 		$this->db->where('account_status', 1);
	 		$query= $this->db->get('account_tbl'); 		

	 		if(!empty($query) && $query->num_rows() == 1)
	 		{
	 			return $query->row();
	 		}
	 		else
	 		{
	 			"No Result";
	 		}

	 	}
	 }
	 public function get_educ_info($email)
	 {
	 	if(!empty($email))
	 	{
	 		$this->db->where('ed_account_email', $email);
	 		// $this->db->where('account_status', 1);
	 		$query= $this->db->get('freelance_education_tbl'); 		

	 		if(!empty($query) && $query->num_rows() > 0)
	 		{
	 			return $query->row();
	 			// print_r($query);
	 		}
	 		else
	 		{
	 			"No Result";
	 		}
	 	}
	 }
	 public function get_port_info($email)
	 {
	 	if(!empty($email))
	 	{
			$this->db->where('portfolio_owner', $email);
			$query2 = $this->db->get('freelance_portfolio_tbl');	

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

	 public function portfolio_info($port_data)
	 {
	 	if(!empty($port_data))
		{
			//$this->db->where('portfolio_owner',$email);
			print_r($port_data);
			$this->db->insert('freelance_portfolio_tbl', $port_data);
			return $this->db->affected_rows() > 0;
		}
	 }

	  public function educational_info($educ_data)
	  {
	  	if(!empty($educ_data))
	 	{
	 		print_r($educ_data);
	 		//$this->db->where('ed_account_email',$email);
	 		$this->db->insert('freelance_education_tbl', $educ_data);
	 		return $this->db->affected_rows() > 0;
	 	}
	  }



	// public function account($save_data)
	// {

	 // $this->db->set('email', $email);
	 // $this->db->set('account_username', $username);
	 // $this->db->set('account_gname', $sname);
	 // $this->db->set('account_sname', $gname);
	 // $this->db->set('account_contact', $contact);
	 // $this->db->insert('account_info_tbl');



	// 	if(!empty($save_data))
	// 	{
	// 		//print_r($save_data);

	// 		$this->db->insert('account_info_tbl', $save_data);
	// 	}
	// }	

}


?>