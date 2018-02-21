<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('User_Model');

	}
	public function profile()
	{
		$email = $this->session->userdata('email');
		$var = 1;
		$logged = $this->User_Model->get_log_stat($email,$var);
		$info = $this->User_Model->get_account_info($email);
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

		$this->session->set_userdata($page_data2);
		$this->session->set_userdata($page_data);
		$this->session->set_userdata($page_data3);

		$this->load->view('freelance/header', $page_data, $page_data2,$page_data3);
		$this->load->view('freelance/profile',$data);
		$this->load->view('freelance/footer');	

	}
	


	public function index()
	{

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
	
	public function thread()
	{
		
		$email = $this->session->userdata('email');
		$info = $this->User_Model->get_account_info($email);

		$page_data = array(
		'email' => $info->account_email,
		'log_status' => $info->log_status,
		);


		$search = $this->input->post('search');


		$thread = array(
			'data' => $this->User_Model->get_thread($search),
		);
		

		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/thread', $thread);
		$this->load->view('freelance/footer');
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
		'page_title' => 'Create Project',
		'user_type' => $this->session->userdata('user_type'),
		'email' => $this->session->userdata('email'),
		'contact' => $this->session->userdata('contact'),
		);

		$this->session->set_userdata($page_data);

		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/profile-projects');
		$this->load->view('freelance/footer');
	}


	public function validate_projects()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
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
		$this->session->set_userdata('type', $this->input->post('type') );
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


			redirect(base_url().'users/projects_upload_images');

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
		'description' => $this->session->userdata('description'),
		'requirements' => $this->session->userdata('requirements'),
		'price' => $this->session->userdata('price'),
		'search' => $this->session->userdata('search'),
		);

		$this->session->set_userdata($page_data);
		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/profile-projects-images');
		$this->load->view('freelance/footer');
	}
	

	public function education()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/profile-educational1');
		$this->load->view('freelance/header');
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

			$project_info = array(
				'project_publisher' => $this->session->userdata('email'),
				'project_username' => $this->session->userdata('user_name'),
				'project_publisher_type' => $this->session->userdata('user_type'),
				'project_title' => $this->session->userdata('title'),
				'project_title_slug' => url_title($this->session->userdata('title')),
				'project_category' => $this->session->userdata('category'),
				'project_subcategory' => $this->session->userdata('subcategory'),
				'project_service_type' => $this->session->userdata('service'),
				'project_type' => $this->session->userdata('type'),
				'project_offer' => $this->session->userdata('offer'),
				'project_delivery' => $this->session->userdata('delivery'),
				'project_requirements' => $this->session->userdata('requirements'),
				'project_image' => $file_data['file_name'],
				'project_date_posted' =>date('Y-m-d H:i:s'),
				'project_price' =>$this->session->userdata('price'),
				'project_search' =>$this->session->userdata('search'),
			);
			

			$this->session->set_userdata($page_data);
			$this->load->model('User_Model');
			$this->User_Model->create_project($project_info);
			$this->load->view('freelance/header',$page_data);
			$this->load->view('freelance/success-profile-projects',$data);
			$this->load->view('freelance/footer');
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
		if($this->User_Model->update($password, $username))
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

		$this->load->view('freelance/header');
		$this->load->view('freelance/success-edit-project');
		$this->load->view('freelance/footer');
	}

	

	public function remove_project()
	{
		//open modal to input password
		echo "Okay";
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



	public function logout()
	{
		$email = $this->session->userdata('email');
		$var = 0;
		$this->User_Model->get_log_stat($email,$var);
		$this->session->sess_destroy();

		redirect(base_url('/home'));

	}
	
	
	
	
	
}


?>