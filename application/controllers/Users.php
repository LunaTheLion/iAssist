<?php
 if(!defined('BASEPATH'))exit('No direct script access allowed');
 // session_set_cookie_params(0);
 // session_start();
class Users extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('User_Model');
		
	}
	public function create_()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		// $important = array (
		// 	'accnt_email' => $this->session->userdata('accnt_email'),
		// 	'accnt_username' => $this->session->userdata('accnt_username'),
		// 	'accnt_status' => $this->session->userdata('accnt_status'),
		// 	'accnt_img' => $this->session->userdata('accnt_img'),
		// );
		// $this->session->set_userdata($important);
		// $this->load->view('freelance/header', $sess_data);
		// $this->load->view('freelance/profile1-1');
		// $this->load->view('freelance/footer');
	}


	public function general($email)
	{
		//	echo $email;
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$h = $this->User_Model->get_profile($email);
		if(empty($h))// new user
		{
			
			$fetch = array(
				'data' => $this->User_Model->create_profile($email),
			);
			$this->load->view('freelance/header', $sess_data);
			$this->load->view('freelance/new-profile', $fetch);
			
			$this->load->view('freelance/footer');
		}
		else
		{
			echo " its not";
			$fetch = array(
				'data' => $this->User_Model->get_profile($email),
			);
			$this->load->view('freelance/header', $sess_data);
			$this->load->view('freelance/new-profile', $fetch);
			$this->load->view('freelance/footer');
		}
	}

	public function logout()
	{
		$email = $this->session->userdata('email');
		$var = 0;
		$this->User_Model->get_log_stat($email,$var);
		$this->session->sess_destroy();

		redirect(base_url('/home'));

	}
	

	public function profile($username)
	{
		$email = $this->session->userdata('email');
		if(!empty($email))
		{
				$var = 1;
				$this->session->userdata('email', $email);
				$logged = $this->User_Model->get_log_stat($email,$var);
				$info = $this->User_Model->get_account_info($email);
				$educ = $this->User_Model->get_educ_info($email);
				$port = $this->User_Model->get_port_info($email);

				$data = array(
					'proj' =>$this->User_Model->get_user_project($email),
				);

				$page_data2 = array(
				'school' =>$educ->ed_school_name,
				'college' => $educ->ed_college,
				'course' => $educ->ed_focus_of_study,
				);

				$page_data = array(
				'user_name' => $info->account_username,
				'given_name' => $info->account_gname,
				'surname' => $info->account_sname,
				'email' => $info->account_email,
				'log_status' => $info->log_status,
				'contact' => $info->account_contact,
				'profile_pic' =>$info->account_img,
				'about_me' => $info->about_user,
				);


				$page_data3 = array(
					'skill' => $port->portfolio_skill_level,
					'field' => $port->portfolio_skill,
					'user_type' =>$port->portfolio_owner_type,
				);


				$this->session->set_userdata('user_name', $info->account_username);
				$this->session->set_userdata('email',$info->account_email);
				$this->session->set_userdata('log_status', $info->log_status);

				$this->session->set_userdata($page_data2);
				$this->session->set_userdata($page_data);
				$this->session->set_userdata($page_data3);

				$this->load->view('freelance/header', $page_data, $page_data2,$page_data3);
				$this->load->view('freelance/profile',$data);
				$this->load->view('freelance/footer');
		
		}
		elseif(!empty($username))
		{

			$getemail = $this->User_Model->get_email_by_username($username);

			if(!empty($getemail))
			{
				$email = $getemail->account_email;
				
				$educ = $this->User_Model->get_educ_info($email);
				$port = $this->User_Model->get_port_info($email);

				$data = array(
					'proj'     =>$this->User_Model->get_user_project($email),

				);

				$page_data2 = array(
				'school' =>$educ->ed_school_name,
				'college' => $educ->ed_college,
				'course' => $educ->ed_focus_of_study,
				);
				
				$page_data = array(
				'user_name' => $getemail->account_username,
				'given_name' => $getemail->account_gname,
				'surname' => $getemail->account_sname,
				'email' => $getemail->account_email,
				'log_status' => $getemail->log_status,
				'contact' => $getemail->account_contact,
				'profile_pic' =>$getemail->account_img,
				'about_me' => $getemail->about_user,
				'email' =>$getemail->account_email,
				);
				$page_data3 = array(
					'skill' => $port->portfolio_skill_level,
					'field' => $port->portfolio_skill,
					'user_type' =>$port->portfolio_owner_type,
				);

				$this->session->set_userdata('user_name', $info->account_username);
				$this->session->set_userdata('email',$info->account_email);
				$this->session->set_userdata('log_status', $info->log_status);

				$this->session->userdata('email', $email);
				$this->session->set_userdata($page_data2);
				$this->session->set_userdata($page_data);
				$this->session->set_userdata($page_data3);
				$this->load->view('freelance/header',$page_data , $page_data3 , $page_data2);
				$this->load->view('freelance/profile',$data);
				$this->load->view('freelance/footer');
			}
			else{
				echo "Error";
			}
			
		}
			

	}
	


	// public function home($username)
	// {
	// 	 $this->load->view('freelance/header');
	// 	$email =$this->session->userdata('email');
	// 	//echo $email;
	// 	// $this->load->view('freelance/header');
	// 	 $this->load->view('pages/home');
	// 	$this->load->view('freelance/footer');
	// 	// $this->session->set_userdata('email', $email);	
		
	// }

	public function thread()
	{
		//$this->load->view('freelance/header');


		 $this->load->view('freelance/header');
		$email =$this->session->userdata('email');
		//echo $email;
	
		 $search = $this->input->post('search');

		 $thread = array(
			'data' => $this->User_Model->get_thread($search),
		);
		// echo "<pre>";
		// print_r($thread);
		// echo "</pre>";
		$this->session->set_userdata('email');	
		// $this->load->view('freelance/header');
		$this->load->view('freelance/thread', $thread);
		$this->load->view('freelance/footer');
	}

	
	
	public function profile_personal()
	{

		$page_data = array(
		'page_title' => 'Create User Profile',
		'log_status' =>1,
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'user_type' => $this->session->userdata('user_status'),
		'email' => $this->session->userdata('email'),
		'contact' => $this->session->userdata('contact'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		);

		$this->session->set_userdata($page_data);
		
		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/profile-personal');
		$this->load->view('freelance/footer');

	}
	public function validate_profile_personal()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('given_name', 'Givename', 'required');
		$this->form_validation->set_rules('surname', 'Username', 'required');
		$this->form_validation->set_rules('contact', 'Contact Number', 'required');
		$this->form_validation->set_rules('user_status', 'User Type', 'required');
		
		$this->session->set_userdata('user_name', $this->input->post('user_name'));
		$this->session->set_userdata('given_name', $this->input->post('given_name'));
		$this->session->set_userdata('surname', $this->input->post('surname'));
		$this->session->set_userdata('contact', $this->input->post('contact'));
		$this->session->set_userdata('user_status', $this->input->post('user_status'));

		if($this->form_validation->run())
		{

			$page_data = array(
			'page_title' => 'Create User Profile',
			'user_name' => $this->session->userdata('user_name'),
			'given_name' => $this->session->userdata('given_name'),
			'surname' => $this->session->userdata('surname'),
			'user_type' => $this->session->userdata('user_status'),
			'email' => $this->session->userdata('email'),
			'contact' => $this->session->userdata('contact'),
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('course'),
			'skill' => $this->session->userdata('skill'),
			'field' => $this->session->userdata('field'),
			);

			$this->session->set_userdata($page_data);
			$email = $this->session->userdata('email');

			$account_info = array(
				'account_username' => $this->input->post('user_name'),
				'account_gname' => $this->input->post('given_name'),
				'account_sname' => $this->input->post('surname'),
				'account_contact' => $this->input->post('contact'),
				'account_status'=>1,
			);

			$this->load->model('User_Model');
			$this->User_Model->account_info($account_info,$email);
			redirect(base_url('users/profile_educational'));
		}
		else
		{
			
			redirect(base_url('users/profile_personal'));
		}
	}

	

	public function profile_educational()
	{
		$page_data = array(
		'page_title' => 'Create User Profile',
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'user_type' => $this->session->userdata('user_status'),
		'email' => $this->session->userdata('email'),
		'contact' => $this->session->userdata('contact'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		);

		$this->session->set_userdata($page_data);



		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/profile-educational');
		$this->load->view('freelance/footer');
	}
	public function validate_profile_educational()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('College', 'College', 'required');
		$this->form_validation->set_rules('Major', 'Major', 'required');
		$this->form_validation->set_rules('field', 'Field', 'required');
		$this->form_validation->set_rules('skill', 'Skill', 'required');


		$this->session->set_userdata('school', $this->input->post('school'));
		$this->session->set_userdata('college', $this->input->post('College'));
		$this->session->set_userdata('Major', $this->input->post('Major'));
		$this->session->set_userdata('field', $this->input->post('field'));
		$this->session->set_userdata('skill', $this->input->post('skill'));

		if($this->form_validation->run())
		{

			$college = $this->input->post('college1');
			$course = $this->input->post('ccs');
			$field = $this->input->post('field');
			$skill = $this->input->post('skill');

			//echo $uname."<br>".$gname."<br>".$surname;
			

			$page_data = array(
			'page_title' => 'Create User Profile',
			'user_name' => $this->session->userdata('user_name'),
			'given_name' => $this->session->userdata('given_name'),
			'surname' => $this->session->userdata('surname'),
			'user_type' => $this->session->userdata('user_status'),
			'email' => $this->session->userdata('email'),
			'contact' => $this->session->userdata('contact'),
			'school' =>$this->session->userdata('school'),
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('Major'),
			'skill' => $this->session->userdata('skill'),
			'field' => $this->session->userdata('field'),
			);

			$this->session->set_userdata($page_data);
			//$email = $this->session->userdata('email');

			$educ_data = array(
				'ed_school_name' => $this->session->userdata('school'),
				'ed_account_email' =>$this->session->userdata('email'),
				'ed_college' => $this->session->userdata('college'),
				'ed_focus_of_study' =>$this->session->userdata('course'),
			);

			$port_data = array(
				'portfolio_owner' => $this->session->userdata('email'),
				'portfolio_owner_type' => $this->session->userdata('user_status'),
				'portfolio_skill' => $this->session->userdata('field'),
				'portfolio_skill_level' => $this->session->userdata('skill'),
			);

			$this->load->model('User_Model');
			$this->User_Model->portfolio_info($port_data);
			$this->User_Model->educational_info($educ_data);

			
			redirect(base_url('users/profile'));
		}
		else
		{
			redirect(base_url('users/profile_educational'));
		}

	}
	
	

	public function projects()
	{
		$email = $this->session->userdata('email');
		$project_data = array(
			'data' =>$this->User_Model->get_proj_info($email), 
		);

		 $this->load->view('freelance/header');
		 $this->load->view('freelance/my-projects', $project_data);
		 $this->load->view('freelance/footer');
	}

	public function create_projects()
	{

		$page_data = array(
			'page_title' => 'Create Projects',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'search' => $this->session->userdata('search'),
			'price' => $this->session->userdata('price'),
			);


		$this->session->set_userdata($page_data);

		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/profile-projects');
		$this->load->view('freelance/footer');
	}	

	public function project_package()
	{
		$page_data = array(
			'page_title' => 'Create Projects',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'search' => $this->session->userdata('search'),
			'price' => $this->session->userdata('price'),
			);


		$this->session->set_userdata($page_data);

		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/profile-project-package');
		$this->load->view('freelance/footer');
	}

	public function validate_project_package()
	{
		
		$package = $this->input->post('package');
		if($package == 1)// activate package
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('offering1', 'Basic Offer', 'required');
			$this->form_validation->set_rules('offering2', 'Standard Offer', 'required');
			$this->form_validation->set_rules('offering2', 'Premium Offer', 'required');
			$this->form_validation->set_rules('description1', 'Basic Description', 'required');
			$this->form_validation->set_rules('description2', 'Standard Description', 'required');
			$this->form_validation->set_rules('description3', 'Premium Description', 'required');
			$this->form_validation->set_rules('delivery1', 'Basic Delivery', 'required');
			$this->form_validation->set_rules('delivery2', 'Standard Delivery', 'required');
			$this->form_validation->set_rules('delivery3', 'Premium Delivery', 'required');
			$this->form_validation->set_rules('revision1', 'Basic Revision', 'required');
			$this->form_validation->set_rules('revision2', 'Standard Revision', 'required');
			$this->form_validation->set_rules('revision3', 'Premium Revision', 'required');
			$this->form_validation->set_rules('price1', 'Basic Price', 'required');
			$this->form_validation->set_rules('price2', 'Standard Price', 'required');
			$this->form_validation->set_rules('price3', 'Premium Price', 'required');

			$this->session->set_userdata('offering1', $this->input->post('offering1'));
			$this->session->set_userdata('offering2', $this->input->post('offering2'));
			$this->session->set_userdata('offering3',  $this->input->post('offering3'));
			$this->session->set_userdata('description1',  $this->input->post('description1'));
			$this->session->set_userdata('description2',  $this->input->post('description2'));
			$this->session->set_userdata('description3',  $this->input->post('description3'));
			$this->session->set_userdata('delivery1',  $this->input->post('delivery1'));
			$this->session->set_userdata('delivery2',  $this->input->post('delivery2'));
			$this->session->set_userdata('delivery3', $this->input->post('delivery3'));
			$this->session->set_userdata('revision1',  $this->input->post('revision1'));
			$this->session->set_userdata('revision2',  $this->input->post('revision2'));
			$this->session->set_userdata('revision3',  $this->input->post('revision3'));
			$this->session->set_userdata('price1', $this->input->post('price1'));
			$this->session->set_userdata('price2', $this->input->post('price2'));
			$this->session->set_userdata('price3', $this->input->post('price3'));	
			$this->session->set_userdata('package', $this->input->post('package'));

			if($this->form_validation->run())
			{
				$package = array (
					'offering1'=> $this->session->userdata('offering1'),
					'offering2'=> $this->session->userdata('offering2'),
					'offering3'=>  $this->session->userdata('offering3'),
					'description1'=>  $this->session->userdata('description1'),
					'description2'=>  $this->session->userdata('description2'),
					'description3'=>  $this->session->userdata('description3'),
					'delivery1'=>  $this->session->userdata('delivery1'),
					'delivery2'=>  $this->session->userdata('delivery2'),
					'delivery3'=> $this->session->userdata('delivery3'),
					'revision1'=>  $this->session->userdata('revision1'),
					'revision2'=>  $this->session->userdata('revision2'),
					'revision3'=>  $this->session->userdata('revision3'),
					'price1'=> $this->session->userdata('price1'),
					'price2'=> $this->session->userdata('price2'),
					'price3'=>  $this->session->userdata('price3'),
					'package' => $this->session->userdata('package'),
				);
				$this->session->set_userdata($package);
				
				redirect(base_url().'users/projects_upload_images');

				// $this->load->view('freelance/header',$package);
				// $this->load->view('freelance/success-profile-project-package');
				// $this->load->view('freelance/footer');
			}
			
		}
		elseif ($package == 0) 
		{
			echo "You did";
		}

	}

	public function validate_projects()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		//$this->form_validation->set_rules('category', 'Category', 'required');
		// $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		
		$this->form_validation->set_rules('service', 'Service', 'required');
		$this->form_validation->set_rules('offer', 'Offer', 'required');
		$this->form_validation->set_rules('delivery', 'Delivery', 'required');					
		$this->form_validation->set_rules('requirements', 'Requirements', 'required');
		$this->form_validation->set_rules('search', 'Search', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		

		$cat = $this->input->post('Category');

		if($cat == "VAA")
		{
			$cg = "Video & Animation";
		}
		elseif($cat == "GAD")
		{
			$cg = "Graphics & Design";
		}
		elseif($cat == "DM")
		{
			$cg = "Digital Marketing";
		}
		elseif($cat == "WAT")
		{
			$cg = "Writing & Translation";
		}
		elseif($cat == "MAA")
		{
			$cg = "Music & Audio";
		}
		elseif($cat == "PAT")
		{
			$cg = "Programming & Tech";
		}
		elseif($cat == "BUS")
		{
			$cg = "Business";
		}
		elseif($cat == "FAL")
		{
			$cg = "Fun & Lifestyle";
		}

		$this->session->set_userdata('title', $this->input->post('title'));
		$this->session->set_userdata('search', $this->input->post('search'));
		$this->session->set_userdata('category', $cg);
		$this->session->set_userdata('subcategory',$this->input->post('subcategory'));
		$this->session->set_userdata('service', $this->input->post('service'));
		$this->session->set_userdata('offer', $this->input->post('offer'));
		$this->session->set_userdata('delivery', $this->input->post('delivery'));
		$this->session->set_userdata('search', $this->input->post('search'));
		$this->session->set_userdata('price', $this->input->post('price'));
		$this->session->set_userdata('requirements', $this->input->post('requirements'));

		if($this->form_validation->run())
		{
			
			$page_data = array(
			'page_title' => 'Validate Projects',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'search' => $this->session->userdata('search'),
			'price' => $this->session->userdata('price'),
			);

			$this->session->set_userdata($page_data);
			$email = $this->session->userdata('email');


			$button = $this->input->post('submit');
			if($button == "Package")
			{
				redirect(base_url().'users/project_package');
			}
			elseif($button == "Next")
			{
				redirect(base_url().'users/projects_upload_images');
			}
			

			}

		else
		{
			$page_data = array(
			'page_title' => 'Validate Projects',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'search' => $this->session->userdata('search'),
			'price' => $this->session->userdata('price'),
			);


			$this->session->set_userdata($page_data);
			redirect(base_url('users/create_projects'));
		}
	}

	public function projects_upload_images()
	{
		$package = $this->session->userdata('package');

		if( $package == 1 )
		{
			$page_data = array(
			'page_title' => 'Upload Image',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),	
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			// 'service' => $this->session->userdata('service'),
			// 'offer' => $this->session->userdata('offer'),
			// 'delivery' => $this->session->userdata('delivery'),
			// 'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'price' => $this->session->userdata('price'),
			'search' => $this->session->userdata('search'),
			'offering1'=> $this->session->userdata('offering1'),
			'offering2'=> $this->session->userdata('offering2'),
			'offering3'=>  $this->session->userdata('offering3'),
			'description1'=>  $this->session->userdata('description1'),
			'description2'=>  $this->session->userdata('description2'),
			'description3'=>  $this->session->userdata('description3'),
			'delivery1'=>  $this->session->userdata('delivery1'),
			'delivery2'=>  $this->session->userdata('delivery2'),
			'delivery3'=> $this->session->userdata('delivery3'),
			'revision1'=>  $this->session->userdata('revision1'),
			'revision2'=>  $this->session->userdata('revision2'),
			'revision3'=>  $this->session->userdata('revision3'),
			'price1'=> $this->session->userdata('price1'),
			'price2'=> $this->session->userdata('price2'),
			'price3'=>  $this->session->userdata('price3'),
			'package' => $this->session->userdata('package'),
			);

			$this->session->set_userdata($page_data);
			$this->load->view('freelance/header',$page_data);
			$this->load->view('freelance/profile-projects-images');
			$this->load->view('freelance/footer');
		}
		elseif ($package == 0) {
			$page_data = array(
			'page_title' => 'Upload Image',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),	
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'price' => $this->session->userdata('price'),
			'search' => $this->session->userdata('search'),
			);

			$this->session->set_userdata($page_data);
			$this->load->view('freelance/header',$page_data);
			$this->load->view('freelance/profile-projects-images');
			$this->load->view('freelance/footer');
		}
		
	}
	

	public function education()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/profile-educational-2');
		$this->load->view('freelance/footer');
	}

	public function upload_profile()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/upload-profile');
		$this->load->view('freelance/footer');

	}


	public function validate_upload_profile()
	{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('freelance/header');
				$this->load->view('freelance/upload-profile',$error);
				$this->load->view('freelance/footer');
			}
			else
			{
				$email= $this->session->userdata('email');
				$proj= $this->User_Model->get_proj_info($email);
				//get 
				$file_data = $this->upload->data();
				$data['img'] = base_url().'/uploads/'.$file_data['file_name'];
				$image = $file_data['file_name'];

				$this->load->model('User_Model');
				$this->User_Model->insert_profile_pic($email,$image);
				$this->load->view('freelance/header');
				$this->load->view('freelance/success-profile-pic',$data);
				$this->load->view('freelance/footer');
			}
		}


	public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('freelance/header');
			$this->load->view('freelance/profile-projects-images',$error);
			$this->load->view('freelance/footer');
		}
		else
		{
			$email= $this->session->userdata('email');
			$proj= $this->User_Model->get_proj_info($email);

			$file_data = $this->upload->data();
			$data['img'] = base_url().'/uploads/'.$file_data['file_name'];


			$page_data = array(
			'page_title' => 'Upload Image',
			'user_type' => $this->session->userdata('user_type'),
			'email' => $this->session->userdata('email'),	
			'title' => $this->session->userdata('title'),
			'category' => $this->session->userdata('category'),
			'subcategory' => $this->session->userdata('subcategory'),
			'service' => $this->session->userdata('service'),
			'offer' => $this->session->userdata('offer'),
			'delivery' => $this->session->userdata('delivery'),
			'type' => $this->session->userdata('type'),
			'requirements' => $this->session->userdata('requirements'),
			'search' => $this->session->userdata('search'),
			'price' => $this->session->userdata('price'),

			);
			$b = $this->session->userdata('package');
			if( $b == 1)
			{
				$package_data = array(
				'project_publisher' => $this->session->userdata('email'),
				'project_username' => $this->session->userdata('user_name'),
				'project_publisher_type' => $this->session->userdata('user_type'),
				'project_title' => $this->session->userdata('title'),
				'project_title_slug' => url_title($this->session->userdata('title')),
				'project_category' => $this->session->userdata('category'),
				'project_subcategory' => $this->session->userdata('subcategory'),
				'project_description' => $this->session->userdata('service'),
				//'project_type' => $this->session->userdata('type'),
				'project_offer' => $this->session->userdata('offer'),
				'project_delivery' => $this->session->userdata('delivery'),
				'project_requirements' => $this->session->userdata('requirements'),
				'project_image' => $file_data['file_name'],
				'project_date_created' =>date('Y-m-d H:i:s'),
				'project_price' =>$this->session->userdata('price'),
				'project_search' =>$this->session->userdata('search'),

				'project_requirements' => $this->session->userdata('requirements'),
				// 'price' => $this->session->userdata('price'),
				// 'search' => $this->session->userdata('search'),
				'project_basic_offer'=> $this->session->userdata('offering1'),
				'project_standard_offer'=> $this->session->userdata('offering2'),
				'project_premium_offer'=>  $this->session->userdata('offering3'),
				'project_basic_description1'=>  $this->session->userdata('description1'),
				'project_standard_description1'=>  $this->session->userdata('description2'),
				'project_premium_description1'=>  $this->session->userdata('description3'),
				'project_basic_delivery'=>  $this->session->userdata('delivery1'),
				'project_standard_delivery'=>  $this->session->userdata('delivery2'),
				'project_premium_delivery'=> $this->session->userdata('delivery3'),
				'project_basic_revision'=>  $this->session->userdata('revision1'),
				'project_standard_revision'=>  $this->session->userdata('revision2'),
				'project_premium_revision'=>  $this->session->userdata('revision3'),
				'project_basic_price'=> $this->session->userdata('price1'),
				'project_standard_price'=> $this->session->userdata('price2'),
				'project_premium_price'=>  $this->session->userdata('price3'),
				'project_package' => $this->session->userdata('package'),
				);

				$this->session->set_userdata($package_data);



				if($this->User_Model->create_project($package_data)==true)
				{
					$this->load->view('freelance/header',$package_data);
					$this->load->view('freelance/success-profile-projects',$data);
					$this->load->view('freelance/footer');
				}
				else
				{
					echo "What is wrong";
				}
			}
			elseif ( $b == 0) {
				$project_info1 = array(
					'project_publisher' => $this->session->userdata('email'),
					'project_username' => $this->session->userdata('user_name'),
					'project_publisher_type' => $this->session->userdata('user_type'),
					'project_title' => $this->session->userdata('title'),
					'project_title_slug' => url_title($this->session->userdata('title')),
					'project_category' => $this->session->userdata('category'),
					'project_subcategory' => $this->session->userdata('subcategory'),
					'project_service_type' => $this->session->userdata('service'),
					//'project_type' => $this->session->userdata('type'),
					'project_offer' => $this->session->userdata('offer'),
					'project_delivery' => $this->session->userdata('delivery'),
					'project_requirements' => $this->session->userdata('requirements'),
					'project_image' => $file_data['file_name'],
					'project_date_created' =>date('Y-m-d H:i:s'),
					'project_price' =>$this->session->userdata('price'),
					'project_search' =>$this->session->userdata('search'),
				);


				

				$this->session->set_userdata($page_data);
				$this->load->model('User_Model');
				
				if($this->User_Model->create_project($project_info1)==true)
				{
					$this->load->view('freelance/header',$page_data);
					$this->load->view('freelance/success-profile-projects',$data);
					$this->load->view('freelance/footer');
				}
				else
				{
					echo "Mali";
				}
			}
			
			
		}
	}

	public function portfolio()
	{	
		$page_data = array(
		'page_title' => 'Portfolio',
		'user_type' => $this->session->userdata('user_type'),
		'email' => $this->session->userdata('email'),	
		);


		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/profile-create-portfolio',$data);
		$this->load->view('freelance/footer');

	}

	public function edit_projects($slug)
	{	
	
		$id = substr($slug, -2);

		$post = $this->User_Model->get_email($id);
		$email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->User_Model->get_post($id),
			'publisher' 	=>	$this->User_Model->get_owner($email), 
			'proj'			=>  $this->User_Model->get_more_proj($email),
		);




		$this->load->view('freelance/header');
		$this->load->view('freelance/edit-projects',$view);
		$this->load->view('freelance/footer');
	}



	public function update_project()
	{
		$password = $this->input->post('password');
		$username = $this->input->post('username');
		if($this->User_Model->check_email($password, $username))
		{
			echo "Account Exist!";

		}
		else
		{
			echo "Email and Password does not match!";
			
		}
	}
			


	public function validate_update()
	{
		//nothing changed 
		//validate all forms 
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		$this->form_validation->set_rules('offer', 'Offer', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('requirements', 'Requirements', 'required');



		$this->session->set_userdata('proj-id', $this->input->post('id'));
		$this->session->set_userdata('new-title', $this->input->post('title'));
		$this->session->set_userdata('new-slug', url_title($this->input->post('title')));
		$this->session->set_userdata('new-category', $this->input->post('category'));
		$this->session->set_userdata('new-subcategory', $this->input->post('subcategory'));
		$this->session->set_userdata('new-delivery', $this->input->post('delivery'));
		$this->session->set_userdata('new-offer', $this->input->post('offer'));
		$this->session->set_userdata('new-price', $this->input->post('price'));
		$this->session->set_userdata('new-description', $this->input->post('description'));
		$this->session->set_userdata('new-requirements', $this->input->post('requirements'));

		if($this->form_validation->run())
		{

			
			$newData = array(
				
				'project_title' => $this->session->userdata('new-title'),
				'project_title_slug'=> url_title($this->session->userdata('new-title')),
				'project_category' => $this->session->userdata('new-category'),
				'project_delivery' => $this->session->userdata('new-delivery'),
				'project_subcategory' => $this->session->userdata('new-subcategory'),
				'project_offer' => $this->session->userdata('new-offer'),
				'project_price' => $this->session->userdata('new-price'),
				'project_description' => $this->session->userdata('new-description'),	
				'project_requirements' => $this->session->userdata('new-requirements'),
			);
			$this->session->set_userdata($newData);
			if($this->User_Model->update_proj($newData) == true)
			{
				$this->load->view('freelance/header', $newData);
				$this->load->view('freelance/success-edit-project');
				$this->load->view('freelance/footer');
			}
			else {


				echo "haha";
				//redirect(base_url('users/edit_projects'));
			}
			


			
		}
		else
		{
			echo "Try Again!";
		}


		
	}

	public function confirm_acc_rem()
	{
		$password = $this->input->post('pass');
		$username = $this->input->post('user');
		$this->session->set_userdata('id', $this->input->post('id'));
		
		if($this->User_Model->check_email($password, $username))
		{
			echo "Account Exist!";

		}
		else
		{
			echo "Email and Password does not match!";
			
		}
	}

	public function remove_project()
	{	
		$id = $this->session->userdata('id');
		//$this->User_Model->remove_proj($id);
			if($this->User_Model->remove_proj($id))
			{
				 echo "Project Successfully Removed";
				 redirect('users/projects');
			}
			else
			{
				 echo "There has been an error occured";
				// redirect('users/projects');
			}
	}
	public function about_me()
	{
		$a = $this->input->post('about');
		$b = $this->input->post('email');

		if($this->User_Model->insert_about($a, $b))
		{
			echo "Update Success";
			//redirect(base_url('users/profile'));
		}
		else
		{
			echo "Update Fail";
		}
		


	}

	

	

	
	
	
	
	
}


?>