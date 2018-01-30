<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('User_Model');

	}

	public function index()
	{
		$email = $this->session->userdata('email');
		$var = 1;
		$logged = $this->User_Model->get_log_stat($email,$var);
		$info = $this->User_Model->get_account_info($email);
		$educ = $this->User_Model->get_educ_info($email);
		$port = $this->User_Model->get_port_info($email);
		

		$page_data2 = array(
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
		$this->load->view('freelance/profile');
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
				//'email' => $this->session->userdata('email'),
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

		//$this->load->view('freelance/header',$page_data);

		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/profile-educational');
		$this->load->view('freelance/footer');
	}
	public function validate_profile_educational()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('college1', 'College', 'required');
		$this->form_validation->set_rules('ccs', 'CCS', 'required');
		$this->form_validation->set_rules('field', 'Field', 'required');
		$this->form_validation->set_rules('skill', 'Skill', 'required');


		$this->session->set_userdata('college', $this->input->post('college1'));
		$this->session->set_userdata('course', $this->input->post('ccs'));
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
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('course'),
			'skill' => $this->session->userdata('skill'),
			'field' => $this->session->userdata('field'),
			);

			$this->session->set_userdata($page_data);
			//$email = $this->session->userdata('email');

			$educ_data = array(
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

			
			redirect(base_url('users/index'));
		}
		else
		{
			redirect(base_url('users/profile-educational'));
		}

	}
	
	public function thread()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/thread');
		$this->load->view('freelance/footer');
	}

	public function projects()
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
		$this->form_validation->set_rules('service', 'Service', 'required');
		$this->form_validation->set_rules('offer', 'Offer', 'required');
		$this->form_validation->set_rules('delivery', 'Delivery', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('requirements', 'Requirements', 'required');
		
		$this->session->set_userdata('title', $this->input->post('title'));
		$this->session->set_userdata('category', $this->input->post('category'));
		$this->session->set_userdata('subcategory',$this->input->post('subcategory'));
		$this->session->set_userdata('service', $this->input->post('service'));
		$this->session->set_userdata('offer', $this->input->post('offer'));
		$this->session->set_userdata('delivery', $this->input->post('delivery'));
		$this->session->set_userdata('description', $this->input->post('description'));
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
			'description' => $this->session->userdata('description'),
			'requirements' => $this->session->userdata('requirements'),

			);

			$this->session->set_userdata($page_data);
			$email = $this->session->userdata('email');

			$project_info = array(
				'email' => $this->session->userdata('email'),
				'title' => $this->session->userdata('title'),
				'category' => $this->session->userdata('category'),
				'subcategory' => $this->session->userdata('subcategory'),
				'service' => $this->session->userdata('service'),
				'offer' => $this->session->userdata('offer'),
				'delivery' => $this->session->userdata('delivery'),
				'description' => $this->session->userdata('description'),
				'requirements' => $this->session->userdata('requirements'),
			);

			$this->load->model('User_Model');

			$this->User_Model->create_project($project_info);


			redirect(base_url('users/projects_upload_images'));
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
			'description' => $this->session->userdata('description'),
			'requirements' => $this->session->userdata('requirements'),

			);

			$this->session->set_userdata($page_data);
			redirect(base_url('users/projects'));
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
		'description' => $this->session->userdata('description'),
		'requirements' => $this->session->userdata('requirements')

		);

		$project_info = array(
			'project_publisher' => $this->session->userdata('email'),
			'project_publisher_type' => $this->session->userdata('user_type'),
			'project_title' => $this->session->userdata('title'),
			'project_category' => $this->session->userdata('category'),
			'project_subcategory' => $this->session->userdata('subcategory'),
			'project_service_type' => $this->session->userdata('service'),
			'project_offer' => $this->session->userdata('offer'),
			'project_delivery' => $this->session->userdata('delivery'),
			'project_description' => $this->session->userdata('description'),
			'project_requirements' => $this->session->userdata('requirements'),
			'project_date_posted' =>date('Y-m-d'),
		);



		$this->session->set_userdata($page_data);
		$this->load->model('User_Model');
		$this->User_Model->project_info($project_info);
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
	public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

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

			$this->load->view('freelance/header');
			$this->load->view('freelance/success-profile-projects',$data);
			$this->load->view('freelance/footer');
		}
	}

	public function view_profile_project()
	{


	}
	public function logout()
	{
		$email = $this->session->userdata('email');
		$var = 0;
		$this->User_Model->get_log_stat($email,$var);
		$this->session->sess_destroy();
		// $this->session->unset_userdata('$page_data');
		// $this->session->unset_userdata('$page_data2');
		// $this->session->unset_userdata('$page_data3');
		redirect(base_url('/home'));
		//$this->load->view('/home');

	}
	
	
	
	
	
}


?>