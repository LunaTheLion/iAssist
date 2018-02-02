<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function dashboard()
	{

		$email = $this->session->userdata('email');
		$this->load->model('Admin_model');
		$info = $this->Admin_model->get_info($email);

		$admin_data = array(
			'email' =>$info->account_email,
			'logged' =>$info->log_status,
			'username' =>$info->account_username,
		);
		// echo $this->session->userdata('email');
		// print_r($info);

		// $admin_data = array(
		// 	'email' =>$this->session->userdata('email'));


		$nav_data = array
		(
			'active_nav'	=>	'active-menu',
			'active_nav'	=>	'',
			//'new_users'			=>	$this->Admin_model->get_users(),
			'active_job'		=>	'',
		);

		$dash_data = array
		(
			'active_dashboard'	=>	'active-menu',
			'active_applicant'	=>	'',
			'new_users'			=>	$this->Admin_model->get_users(),
			'active_job'		=>	'',

		);




		$this->session->set_userdata($admin_data);
		$this->load->view('admin/template/header',$admin_data);
		$this->load->view('admin/template/nav', $nav_data);

		// $this->session->set_userdata($admin_data);		
		
		$this->load->view('admin/dashboard', $dash_data);
		$this->load->view('admin/template/footer');
	}


	public function logout()
	{
		$email = $this->session->userdata('email');
		$var=0;
		$this->Admin_model->log($email,$var);
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}	
	public function sign_up()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/sign-up');
		$this->load->view('admin/template/footer');
	} //end of sign up
	public function sign_up_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		$this->session->set_userdata('email', $this->input->post('email'));


		 if($this->form_validation->run())
		 {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->Admin_model->signup($email,$password))//if the model function is true.
			{

				redirect(base_url().'/admin');

			}
			else
			{

				redirect(base_url().'admin/sign_up');
			}
		}
		else
		{		
			redirect(base_url().'admin/sign_up');	
		}

	} //end of sign_up_validation

	public function sign_in_validation()
	{
		//$this->session->sess_destroy();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'password', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->Admin_model->signin($email,$password))
		{
			
			$email = $this->input->post('email');
			$var=1;
			$this->Admin_model->log($email,$var);
			
			$this->session->set_userdata('email', $this->input->post('email'));
			$this->session->set_userdata('logged',1);
			//$this->load->model('Admin_model');
			if($this->Admin_model->account_status($email))// if user has account
			{	

				
				redirect(base_url().'admin/dashboard');
			}
			else
			{
				redirect(base_url().'admin/success_sign_in');
			}

		}
		else
		{
			redirect(base_url().'admin');
		}


		
	} 
	
	public function success_sign_in()
	{
		$admin_data = array(
			'email' =>$this->session->userdata('email'));

		$this->session->set_userdata($admin_data);

		$this->load->view('admin/template/header',$admin_data);
		$this->load->view('admin/success-sign-in');
		$this->load->view('admin/template/footer');
	}



	public function create_profile()
	{
		$admin_data = array(
			'email' =>$this->session->userdata('email'));

		$this->session->set_userdata($admin_data);

		$this->load->view('admin/template/header',$admin_data);
		$this->load->view('admin/create-profile');
		$this->load->view('admin/template/footer');
	}
	public function validate_create_profile()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('contact','Contact','required');

		if($this->form_validation->run())
		{

			
			$contact = $this->input->post('contact');
			$email = $this->session->userdata('email');


			$this->Admin_model->validate_profile($email, $this->input->post());

			$this->session->set_userdata('username', $this->input->post('username'));
			$admin_data = array(
				'email' =>$this->session->userdata('email'),
				'username' => $this->session->userdata('username'),
			);

			echo $this->session->set_userdata($admin_data);

			redirect(base_url().'admin/dashboard');
			
		}
		else
		{

			redirect(base_url('admin/create_profile'));
			//error occured while filling out the create profile
		}

	}

}

