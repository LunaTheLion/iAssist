<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}



	public function create_profile($email)
	{
		$this->db->select("*");
		$this->db->where('account_email', $email);
		$this->db->from('account_tbl');
		$query = $this->db->get();

		   if($query->num_rows() != 0)
		   {
		       return $query->result();

		   }
		   else
		   {
		       return false;
		   }
	}

	public function create_personal_profile($email)
	{
		if(!empty($email))	
		{

			$this->db->where('account_email',$email);
			$this->db->set('account_gname', $this->input->post('name'));
			$this->db->set('account_mname', $this->input->post('middlename'));
			$this->db->set('account_sname', $this->input->post('surname'));
			$this->db->set('account_contact', $this->input->post('contact'));
			$this->db->set('house_no', $this->input->post('houseNo'));
			$this->db->set('street', $this->input->post('street'));
			$this->db->set('barangay', $this->input->post('brngay'));
			$this->db->set('municipal', $this->input->post('mncpl'));
			$this->db->update('account_tbl');

			if ($this->db->affected_rows()==1)
			{
				return true;
			}
			else
				return false;
		}

	}

	public function get_important($email)
	{
		if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $email))
		{
			$this->db->select('account_id,account_email,account_status,account_username,account_img');
			$this->db->where('account_email' , $email);
			$query = $this->db->get('account_tbl');


			if(!empty($query) && $query->num_rows() == 1)
			{
				return $query->row();
			}
			else
			{
				"No Result";
				
			}
			
		}	
		else
		{
			$this->db->select('account_id,account_email,account_status,account_username,account_img');
			$this->db->where('account_username' , $email);
			$query = $this->db->get('account_tbl');


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
	public function insert_educ($educ_data)
	{	
		if(!empty($educ_data))
		{
			$this->db->insert('freelance_education_tbl',$educ_data);
			if ($this->db->affected_rows()==1)
			{//success insert	
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function get_profile($email)
	{
		$this->db->select("*");
		$this->db->where('account_email' , $email);
		$this->db->from('account_tbl');
		$this->db->join('freelance_portfolio_tbl', 'portfolio_owner = account_email', 'right');
		$this->db->join('freelance_education_tbl', 'ed_account_email = account_email' , 'right');
		$this->db->join('post_tbl', 'creator = account_email', 'right');
		 $query = $this->db->get();

		    if($query->num_rows() != 0)
		    {
		        return $query->result();
		    }
		    else
		    {
		        return $query->result();
		    }
	}	
	
	public function insert_post($post_data)
	{
		if(!empty($post_data))
		{
			$this->db->insert('post_tbl', $post_data);
			if ($this->db->affected_rows()==1)
			{//success insert	
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	public function get_post($email)
	{	
		$this->db->select('*');
		$this->db->where('deleted', 0);
		$this->db->where('creator', $email);
		$query = $this->db->get('post_tbl');

		return $query->result();
	}
	public function del_post($id)
	{
		//echo "id";
		$this->db->where('post_id', $id);
		$this->db->set('deleted', 1);
		$this->db->update('post_tbl');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			echo "NOPE";
			//return false;
		}
	}
	public function account_verified($email)
	{
		$this->db->select('account_email', $email);
		$this->db->where('confirm_code', '');
		$hey = $this->db->get('account_tbl');
		return $hey->result();
	}
	public function code_match($email,$code)
	{

		$this->db->select('account_email', $email);
		$this->db->where('verification_code', $code);
		$this->db->set('confirm_code', 'review');
		$this->db->update('account_tbl');
		if($this->db->affected_rows() != 0)
		{
			return true;
		}
		else
		{
			return false;
			//return false;
		}
	}

}//END OF MODEL CONTROLLER


?>