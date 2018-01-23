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
		'contact' => $info->account_contact,
		);


		$page_data3 = array(
			'skill' => $port->portfolio_skill_level,
			'field' => $port->portfolio_skill,
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

	public function portfolio()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/profile-portfolio');
		$this->load->view('freelance/footer');
	}
	
	
	
	
	
}


?>