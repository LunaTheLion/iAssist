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

	public function get_profile($email)
	{
		$this->db->select("*");
		$this->db->where('account_email' , $email);
		$this->db->from('account_tbl');
		$this->db->join('freelance_portfolio_tbl', 'portfolio_owner = account_email', 'right');
		$this->db->join('freelance_education_tbl', 'ed_account_email = account_email' , 'right');
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
	public function get_projects_to_profile($email)
	{
		
		$this->db->limit(3);
		$this->db->select('id,project_title, project_title_slug, project_image,project_offer,project_date_created');
		$this->db->where('project_publisher' , $email);
		$gptp = $this->db->get('freelance_project_tbl');
		if($gptp->num_rows() !=0)
		{
			return $gptp->result();
		}
		else 
		{
			return false;
		}
	}

	public function get_email_by_username($username)
	{
		if(!empty($username))
		{
			$this->db->where('account_username', $username);
			$query= $this->db->get('account_tbl'); 		
			    if($query->num_rows() == 1)
			    {
			        return $query->row();
			    }
			    return false;
		}
	}
	
	public function get_user_project($email)
	{
		if(!empty($email))
		{
			$this->db->limit(3);
			$this->db->order_by('id', 'DESC');
			$this->db->where('project_publisher', $email);
			$this->db->where('project_removed_by_user', 0);
			$q = $this->db->get('freelance_project_tbl');
			return $q->result();
		}
	}
	public function get_username($username)
	{
		if(!empty($username))
		{
			
			$this->db->where('account_username', $username);
			$query= $this->db->get('account_tbl'); 		

			if(!empty($query) && $query->num_rows() == 1)
			{
				return $query->row();
			}
			else{
				echo "No Result";
			}
		}
	}


	public function get_log_stat($email,$var)// logged in and out
	{
		if(!empty($email))
		{
			$this->db->where('account_email',$email);
			$this->db->set('log_status',$var);
			$this->db->update('account_tbl');
			return $this->db->affected_rows() > 0;
		}	
		
	 }

	 public function insert_profile_pic($email,$image)
	 {
	 	if(!empty($email))
	 	{
	 		$this->db->where('account_email', $email);
	 		$this->db->set('account_img', $image);
	 		$this->db->update('account_tbl');
	 		return $this->db->affected_rows() > 0;

	 	}
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
	 public function get_email($id)
	 {
	 	if(!empty($id))
	 	{
	 		$this->db->where('id', $id);
	 		$this->db->where('project_removed_by_user' , 0);
	 		$query= $this->db->get('freelance_project_tbl'); 		
	 		return $query->row();
	 	}
	 }
	 public function get_post($id)
	 {
	 	if(!empty($id))
	 	{
	 		$this->db->where('id', $id);
	 		$this->db->where('project_removed_by_user' , 0);
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
	   		$this->db->where('project_removed_by_user' , 0);
	   		$this->db->where('project_publisher', $email);
	   		$q = $this->db->get('freelance_project_tbl');
	   		return $q->result();
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
	  public function get_proj_info($email)
	  {
	  	if(!empty($email))
	  	{
	 		$this->db->where('project_publisher', $email);
	 		$this->db->where('project_removed_by_user' , 0);
	 		$this->db->order_by('project_date_created', 'DESC');
	 		$query2 = $this->db->get('freelance_project_tbl');	
	 		

	  		if(!empty($query2) && $query2->num_rows() > 0)
	  		{
	  			return $query2->result();
	  			
	  		}
	  		else
	  		{
	  			"No Result";

	  		}
	  	}
	  }

	  public function create_project($project_info)
	  {
	  	if(!empty($project_info))
	  	{
	  		$this->db->insert('freelance_project_tbl',$project_info);
	  		if ($this->db->affected_rows()==1)
	  		{
	  		
	  			return true;
	  		}
	  		else
	  		{
	  			echo "<pre>";
	  			print_r($project_info);
	  			echo "</pre>";
	  			return false;
	  		}
	  	}
	  }

	 public function portfolio_info($portfolio_info)
	 {
	 	if(!empty($portfolio_info))
		{

			//print_r($port_data);
			$this->db->insert('freelance_portfolio_tbl', $portfolio_info);
			return $this->db->affected_rows() > 0;
		}
	 }
	  public function project_info($project_info)
	  {
	  	if(!empty($project_info))
	 	{

	 		//print_r($port_data);
	 		$this->db->insert('freelance_project_tbl', $project_info);
	 		return $this->db->affected_rows() > 0;
	 	}
	  }

	  public function educational_info($educ_data)
	  {
	  	if(!empty($educ_data))
	 	{
	 		//print_r($educ_data);
	 		//$this->db->where('ed_account_email',$email);
	 		$this->db->insert('freelance_education_tbl', $educ_data);
	 		return $this->db->affected_rows() > 0;
	 	}
	  }


	  public function get_thread($search)
	{
		if(empty($search))
		{
			//get the data from account_table to join in freelance project to avoid redundancy.
			$this->db->select("*");
		    $this->db->from('account_tbl');
		    $this->db->join('freelance_project_tbl', 'project_publisher = account_email', 'inner');
		    $this->db->where('project_removed_by_user' , 0);
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

	  	elseif(!empty($search))
	  	{	

	  		$this->db->select("");
		    $this->db->from('account_tbl');
		    $this->db->join('freelance_project_tbl', 'project_publisher = account_email', 'inner');
		    $this->db->where('project_removed_by_user' , 0);
	  		$this->db->where('project_search', $search);
	  	
	  		$query2 = $this->db->get('freelance_project_tbl');	

	  		if(!empty($query2) && $query2->num_rows() > 0)
	  		{
	  			return $query2->result();

	  		}
	  		else
	  		{
	  			"No Result";
	  		}
	  	}


	  }//end of get_thread

	 

	  public function check_email($password, $username)
	  {

	  	if(!empty($username))
	  	{
	  		$this->db->where('account_email', $username);
	  		$this->db->where('account_password', $password);
	  		$sql = $this->db->get('account_tbl');
	  		return $sql->result();
	  		if(!empty($sql) && $sql->num_rows() > 0)
	  		{
	  			return true;
	  			
	  		}
	  		else
	  		{
	  			return false;
	  			
	  		}
	  	}
	  }
	  	public function remove_proj($id)
		{
			
		$this->db->where('id', $id);
		$this->db->set('project_removed_by_user', 1 );
		$this->db->update('freelance_project_tbl');
		//return $this->db->affected_rows() > 0;
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			ECHO "nope";
		}

		}


	  public function update_proj($page_data)
	  {
	  	// echo "<pre>";
	  	// print_r($page_data);
	  	// echo "</pre>";

	  	 $email =$this->session->userdata('email');
	  	 $proj = $this->session->userdata('proj-id');
	  	 // echo $proj;
	  	 // echo $email;
	  	$this->db->where('project_publisher', $email);
	  	$this->db->where('id', $proj);
	  	$this->db->update('freelance_project_tbl', $page_data);
	  	if( $this->db->affected_rows() > 0)
	  	{
	  		return true;
	  		// echo "nice";
	  	}
	  	else
	  	{
	  		return false;
	  	}
	  	
	  }

	  

	  public function insert_about($a, $b)
	  {
	  	
	  	if(!empty($a))
	  	{
	  		$this->db->where('account_email', $b);
	  		$this->db->set('about_user', $a);
			$this->db->update('account_tbl');
			return $this->db->affected_rows() > 0;
	  	}
	  }

}


?>