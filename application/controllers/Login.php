<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('session');
		
	}


	public function sign_in(){
		 	$email = $this->input->post('email');
			$password = $this->input->post('password');

			
			if($this->Login_model->signin($email,$password))
			{
				$astatus = $this->Login_model->accountstatus($this->session->userdata('email'));
				// upon signing in you are logged in. until you click the logout.
				//
				$this->session->set_userdata('Account_Status', $astatus);
				if($this->Login_model->accountstatus($email)) // if user has completed the profile
				{
					//create an html file for creating and showing the data from the database
					//then proceed to getting the data from database.
					//show an html first to test the connection. 
					//create an html wherein the user while be advised to complete his/her profile. 
					//show info
					
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('log_status',1);
					redirect(base_url().'users/profile');
				}
				else
				{
					//prompt profile completions
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('log_status',1);
					//$this->session->set_userdata('',);
					redirect(base_url().'login/success_sign');
				}	
			}
			else
				{
					$this->session->set_flashdata('error','Invalid email or password');
					$this->load->view('templates/header');
					$this->load->view('pages/sign-in');
					$this->load->view('templates/footer');
				}
	}
	public function success_sign()
	{
		$this->session->userdata('email');
		$this->load->view('freelance/header');
		$this->load->view('freelance/success-sign-in');
		$this->load->view('freelance/footer');
	}
	public function sign_up()
	{
			$this->load->view('templates/header');
			$this->load->view('pages/sign-up');
			$this->load->view('templates/footer');
	}
	public function sign_up_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('cpassword','Confirm Password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		 if($this->form_validation->run())
		 {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if($this->Login_model->signup($email,$password))//if the model function is true.
			{
				redirect(base_url().'login/sign_in');

				//echo $email ; echo $password;
			}
			else
			{
				redirect(base_url().'login/sign_up');
			}
		}
		else
		{		
			redirect(base_url().'login/sign_up');	
		}

	}

	

}


?>