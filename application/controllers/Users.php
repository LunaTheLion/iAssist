<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$page_data = array(
		'page_title' => 'Create User Profile',
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'email' => $this->session->userdata('email'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		'company' => $this->session->userdata('company'),
		'location' => $this->session->userdata('location'),
		'title' => $this->session->userdata('title'),
		'role' => $this->session->userdata('role'),
		'description' => $this->session->userdata('description'),
		);

		$this->session->set_userdata($page_data);

		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/profile');
		$this->load->view('freelance/footer');	
	}
	public function create_profile()
	{

		$page_data = array(
		'page_title' => 'Create User Profile',
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'email' => $this->session->userdata('email'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		);

		$this->session->set_userdata($page_data);
		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/create-profile');
		$this->load->view('freelance/footer');

	}
	public function validate_profile()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('given_name', 'Givename', 'required');
		$this->form_validation->set_rules('surname', 'Username', 'required');
		
		$this->session->set_userdata('user_name', $this->input->post('user_name'));
		$this->session->set_userdata('given_name', $this->input->post('given_name'));
		$this->session->set_userdata('surname', $this->input->post('surname'));

		if($this->form_validation->run())
		{
			$uname= $this->input->post('user_name');
			$gname = $this->input->post('given_name');
			$surname = $this->input->post('surname');
			//echo $uname."<br>".$gname."<br>".$surname;
			

			$page_data = array(
			'page_title' => 'Create User Profile',
			'user_name' => $this->session->userdata('user_name'),
			'given_name' => $this->session->userdata('given_name'),
			'surname' => $this->session->userdata('surname'),
			'email' => $this->session->userdata('email'),
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('course'),
			'skill' => $this->session->userdata('skill'),
			'field' => $this->session->userdata('field'),
			);

			$this->session->set_userdata($page_data);

			//$this->load->view('freelance/header',$page_data);
			
			redirect(base_url('users/create_profile_1'));
		}
		else
		{
			
			redirect(base_url('users/create_profile'));
		}
	}
	public function create_profile_1()
	{
		$page_data = array(
		'page_title' => 'Create User Profile',
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'email' => $this->session->userdata('email'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		);

		$this->session->set_userdata($page_data);

		//$this->load->view('freelance/header',$page_data);

		$this->load->view('freelance/header', $page_data);
		$this->load->view('freelance/create-profile1');
		$this->load->view('freelance/footer');
	}
	public function validate_profile_1()
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
			'email' => $this->session->userdata('email'),
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('course'),
			'field' => $this->session->userdata('field'),
			'skill' => $this->session->userdata('skill')
			);

			$this->session->set_userdata($page_data);
			redirect(base_url('users/create_profile_2'));
		}
		else
		{
			redirect(base_url('users/create_profile_1'));
		}

	}
	public function create_profile_2()
	{
		$page_data = array(
		'page_title' => 'Create User Profile',
		'user_name' => $this->session->userdata('user_name'),
		'given_name' => $this->session->userdata('given_name'),
		'surname' => $this->session->userdata('surname'),
		'email' => $this->session->userdata('email'),
		'college' => $this->session->userdata('college'),
		'course' => $this->session->userdata('course'),
		'skill' => $this->session->userdata('skill'),
		'field' => $this->session->userdata('field'),
		'company' => $this->session->userdata('company'),
		'location' => $this->session->userdata('location'),
		'title' => $this->session->userdata('title'),
		'role' => $this->session->userdata('role'),
		'description' => $this->session->userdata('description'),
		);

		$this->session->set_userdata($page_data);

		$this->load->view('freelance/header',$page_data);
		$this->load->view('freelance/create-profile2');
		$this->load->view('freelance/footer');
	}
	public function validate_profile_2()
	{
		
		$this->session->set_userdata('company', $this->input->post('company'));
		$this->session->set_userdata('location', $this->input->post('location'));
		$this->session->set_userdata('title', $this->input->post('title'));
		$this->session->set_userdata('role', $this->input->post('role'));
		$this->session->set_userdata('description', $this->input->post('description'));

			$company= $this->input->post('company');
			$location = $this->input->post('location');
			$title = $this->input->post('title');
			$role = $this->input->post('role');
			$description = $this->input->post('description');

			$page_data = array(
			'page_title' => 'Create User Profile',
			'user_name' => $this->session->userdata('user_name'),
			'given_name' => $this->session->userdata('given_name'),
			'surname' => $this->session->userdata('surname'),
			'email' => $this->session->userdata('email'),
			'college' => $this->session->userdata('college'),
			'course' => $this->session->userdata('course'),
			'skill' => $this->session->userdata('skill'),
			'field' => $this->session->userdata('field'),
			'company' => $this->session->userdata('company'),
			'location' => $this->session->userdata('location'),
			'title' => $this->session->userdata('title'),
			'role' => $this->session->userdata('role'),
			'description' => $this->session->userdata('description'),
			);

			$this->session->set_userdata($page_data);
			redirect(base_url('users/index'));

	}
	public function thread()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/thread');
		$this->load->view('freelance/footer');
	}
	
	
	
	
	
}


?>