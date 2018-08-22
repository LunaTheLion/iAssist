<title>Profile</title>

<div class="jumbotron mt-5">
	<div class="row">
		<div class="col-lg-4 col-sm-4">
			<div class="card">
				<div class="card-header">head
				</div>
				<div class="card-body">
					<a href="<?php echo base_url('users/general/'.$this->session->userdata('email')) ?>">Back to Profile</a>
					<br>
					<a href="<?php echo base_url('') ?>">View Service</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6">
			<div class="card">
				
				<div class="card-header">Add Service
				</div>
				<div class="card-body">
					<div class="row" >
						<table class="table" style="padding: 0px; margin: 0px;">
						  <tbody>
						    <tr >
						      <th scope="row"><br><label>Title</label></th>
						      <td colspan="4" style="padding:10px;">
						      	<input class="form-control" type="text" style="padding-right: 5px;padding-left: 5px; margin-top:3px; margin-bottom: 0px;" name="title">
						      </td>
						    
						    </tr>
						    <tr>
						      <th scope="row"><br><label>Description</label></th>
						      <td colspan="4" style="padding:10px;">
						      	<textarea class="form-control" style="padding-right: 5px;padding-left: 5px;">im text area</textarea>
						      </td>
						    
						    </tr>
						    <tr class="table">
						      <th scope="row"><br><label>Skills and Expertise</label></th>
						      <td colspan="4" style="padding:10px;">
						      	<input class="form-control" data-role="tagsinput" type="text" style="padding-right: 5px;padding-left: 5px; margin-top:3px; margin-bottom: 0px;" name="title">
						      </td>
						      
						    </tr>
						    <tr class="table">
						      <th scope="row"><br><label>Rate/Hour</label></th>
						      <td style="padding-top:10px; padding-right:10px ; padding-left: 10px; padding-bottom:0px;" >
						      	<input class="form-control" type="text" style="padding-right: 5px;padding-left: 5px; margin-top:3px; margin-bottom: 0px;" name="title">
						      </td>
						      <td></td>
						      <td></td>
						      <td></td>
						    </tr>
						       <tr class="table">
						         <th scope="row"><br><LABEL>Minimun Budget</LABEL></th>
						         <td style="padding:10px;">
						    		<input class="form-control" type="text" style="padding-right: 5px;padding-left: 5px; margin-top:3px; margin-bottom: 0px;" name="title">
						         </td>
						         <td></td>
						        <td></td>
						        <td></td>
						       </tr>
						    
						    <tr class="table">
						      <th scope="row"><br><LABEL>Minimun Budget</LABEL></th>
						      <td >
						 			<select class="custom-select">
						 			      <option selected="">Open this select menu</option>
						 			      <option value="1">One</option>
						 			      <option value="2">Two</option>
						 			      <option value="3">Three</option>
						 			    </select>
						      </td>
						      <td></td>
						     <td></td>
						     <td></td>
						    </tr>
						
						   
						  </tbody>
						</table> 
						<!-- <div class="col-lg-4 col-sm-4">
							 <h5> <center>Title</center></h5> -->
							<!--  
							 <h5>Description</h5> -->
						<!-- </div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" type="text" style="padding-right: 5px;padding-left: 5px; margin-top:3px; margin-bottom: 0px;" name="title">
							<br> -->
							<!-- <textarea class="form-control" style="padding-right: 5px;padding-left: 5px;">im text area</textarea>
							<br>
							<input type="text" class="form-control" name="skills" style="padding-right: 5px;padding-left: 5px;">
							<br>
							<input type="text" class="form-control" name="skills" style="padding-right: 5px;padding-left: 5px;">
							<br>
							<input type="text" class="form-control" name="skills" style="padding-right: 5px;padding-left: 5px;"> -->
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-sm-3">
								<a href="<?php echo base_url('users/general') ?>"  class="btn btn-info">Publish</a>
							</div>
							<div class="col-sm-3">
								<a href="<?php echo base_url('users/general/another'); ?>" class="btn btn-secondary">Save as draft</a>
							</div>
							<div class="col-sm-3">
								
							</div>
							<div class="col-sm-3">
								<a style="position: relative;" href="<?php echo base_url(''); ?>" class="btn btn-primary">Cancel</a>
							</div>
						</div>
						
						
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>





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