<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	
	public function sign_up()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sign-up');
		$this->load->view('admin/footer');
	} //end of sign up
	public function sign_up_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

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
		$this->load->view('admin/header');
		$this->load->view('admin/success-sign-in');
		$this->load->view('admin/footer');
	} 
	public function success_sign_in()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/success-sign-in');
		$this->load->view('admin/footer');
	}
	public function create_profile()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/create-profile');
		$this->load->view('admin/footer');
	}
	public function validate_create_profile()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('contact','Contact','required');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$contact = $this->input->post('contact');

			$this->load->Admin_model->validateprofile($username,$contact);
		}
		else
		{
			redirect(base_url('admin/create_profile'));
			//error occured while filling out the create profile
		}

	}

}

