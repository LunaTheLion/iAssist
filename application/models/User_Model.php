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

			$field = array(
				'account_gname' => $this->input->post('name'),
				'account_mname' => $this->input->post('middlename'),
				'account_sname' => $this->input->post('surname'),
				'account_contact' => $this->input->post('contact'),
				'house_no' => $this->input->post('houseNo'),
				'street' => $this->input->post('street'),
				'barangay' => $this->input->post('brngy'),
				'municipal' => $this->input->post('mncpl'),
				'status' => 'complete',
			);

			$this->db->where('account_email',$email);
			$this->db->update('account_tbl', $field);

			if ($this->db->affected_rows() > 0)
			{
				return true;
			}
			else{
				return false;
			}
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

	public function get_educ_info($email)
	{
		$this->db->select('*');
		$this->db->where('ed_account_email', $email);
		$hey = $this->db->get('freelance_education_tbl');
		if($hey->result_array() > 0)
		{
			return $hey->result();
		}
		else
		{
			return false;
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

	public function check_account($email)
	{
		$this->db->where('account_email', $email);
		$this->db->where('status', 'complete');
		$query = $this->db->get('account_tbl');
		if( $query->result_array() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function check_educ($email)
	{
		$this->db->select('*');
		$this->db->where('ed_account_email', $email);
		$query = $this->db->get('freelance_education_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{

			return false;
		}
	}

	public function get_profile($email)
	{
		//Education and Account Profile only
		$this->db->select("*");
		$this->db->where('account_email' , $email);
		$this->db->where('status', 'complete');
		$this->db->from('account_tbl');
		$this->db->join('freelance_education_tbl', 'ed_account_email = account_email','right');
		
		 $query = $this->db->get();
		    if($query->result_array() > 0)
		    {
		        return $query->result();
		    }
		    else
		    {
		        return false;
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
	public function get_skill($email)
	{
		$this->db->select('*');
		// $this->db->where('skill_email', $email);
		$query = $this->db->get('freelance_skill_table');
		return $query->result();
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
	public function account_verified($email, $code)
	{
		$this->db->select('account_email', $email);
		$this->db->where('verification_code', $code);
		$this->db->Where('confirm_code', 'review');
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
	public function code_match($email,$code)
	{

		$this->db->select('account_email', $email);
		$this->db->where('verification_code', $code);
		$this->db->set('confirm_code', 'review');
		$this->db->update('account_tbl');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
			//return false;
		}
	}


	public function get_college()
	{
		$this->db->select('*');
		$this->db->where('delete_status', 0);
		$query = $this->db->get('college_tbl');
		return $query->result();
	}
	public function get_major_id($college)
	{
		$query =  $this->db->get_where('major_tbl', array('college' => $college));
		return $query->result();
	}
	public function insert_skill($skills)
	{
		// print_r($skills);
		if(!empty($skills))
		{
			$this->db->insert('freelance_skill_table', $skills);
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
	public function insert_job_post($data_in)
	{
		// $data = array(
		// 	'post_type' => $this->input->post('TypeOfPost'),
		// 	'title' => $this->input->post('title'),
		// 	'title_slug' => urlencode($this->input->post('title')),
		// 	'description' => $this->input->post('description'),
		// 	'budget' => $this->input->post('offer'),
		// 	'category' => $this->input->post('category'),
		// 	'date_created' => date('Y-m-d g:i'),
		// 	'creator' => $this->session->userdata('email'),
		// 	'status' => 0,
		// );
		$this->db->insert('post_tbl',$data_in);
		if($this->db->affected_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function count_user_job_post()
	{
		$this->db->select('*');
		$this->db->where('post_type','Job');
		$this->db->where('status',0);
		$this->db->where('creator', $this->session->userdata('email'));
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			return $query->num_rows();
		}
		else
		{
			return false;
		}
	}
	public function count_all_user_post()
	{
		$this->db->select('*');
		$this->db->where('creator', $this->session->userdata('email'));
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			return $query->num_rows();
		}
		else
		{
			return false;
		}
	}

	public function insert_regular_post()
	{
		$data = array(
			'post_type' => $this->input->post('TypeOfPost'),
			'post_username' =>$this->session->userdata('username'),
			'description' => $this->input->post('PostDesc'),
			'date_created' => date('Y-m-d g:i'),
			'creator' => $this->session->userdata('email'),
			'status' => 1,
		);
		$this->db->insert('post_tbl',$data);
		if($this->db->affected_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_user_post()
	{
		$this->db->select('*');
		$this->db->order_by('date_allowed_by_admin', 'DESC');
		$this->db->where('creator', $this->session->userdata('email'));
		$this->db->where('status', '1');
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function new_job()
	{
		$this->db->select('*');
		$this->db->order_by('date_allowed_by_admin', 'DESC');
		$this->db->where('status', '1');
		$query = $this->db->get('post_tbl');
		return $query->result();
	}
	public function request_post()
	{
		$request = array(
			'request_email' => $this->session->userdata('email'),
			'request_category' => $this->input->post('category'),
			'request_description' => $this->input->post('description'),
			'request_price' => $this->input->post('offer'),
			'request_status' => 0,
		);

		$this->db->insert('project_request_tbl', $request);
		if($this->db->affected_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	public function count_user_request_post()
	{
		$this->db->select('*');
		$this->db->where('request_email', $this->session->userdata('email'));
		$query = $this->db->get('project_request_tbl');
		if($query->num_rows() > 0)
		{
			return $query->num_rows();
		}
		else
		{
			return false;
		}
	}
	public function saveImg($image)
	{
		$this->db->select('*');
		$this->db->where('account_email', $this->session->userdata('email'));
		$this->db->set('account_img', $image);
		$this->db->update('account_tbl');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			echo "NOPE";
			return false;
		}
	}
	public function insert_skill_post($data_in)
	{
		$this->db->insert('post_tbl',$data_in);
		if($this->db->affected_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_user_skill()
	{
		$this->db->select('*');
		$this->db->where('post_type', 'skill');
		$this->db->order_by('date_allowed_by_admin', 'DESC');
		$this->db->where('creator', $this->session->userdata('email'));
		// $this->db->where('status', '1');
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function insert_project_post($data_in)
	{
		$this->db->insert('post_tbl',$data_in);
		if($this->db->affected_rows() == 1 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_user_project()
	{
		$this->db->select('*');
		$this->db->where('post_type', 'Project');
		$this->db->order_by('date_allowed_by_admin', 'DESC');
		$this->db->where('creator', $this->session->userdata('email'));
		// $this->db->where('status', '1');
		$query = $this->db->get('post_tbl');
		if($query->num_rows() > 0)
		{
			return $query->result();
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
		$query = $this->db->get('post_tbl');
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

		// $this->db->select("*");
		// $this->db->where('account_email' , $email);
		// $this->db->where('status', 'complete');
		// $this->db->from('account_tbl');
		// $this->db->join('freelance_education_tbl', 'ed_account_email = account_email','right');
		
		//  $query = $this->db->get();
		//     if($query->result_array() > 0)
		//     {
		//         return $query->result();
		//     }
		//     else
		//     {
		//         return false;
		//     }



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
	public function get_project_owner($id)
	{
		//echo $id;
		$this->db->select('creator');
		$this->db->where('post_id', $id);
		$data = $this->db->get('post_tbl');
		if($data->result_array() > 1 )
		{
			return $data->row();
		}
		else
		{
			return false;
		}
	}
}//END OF MODEL CONTROLLER


?>