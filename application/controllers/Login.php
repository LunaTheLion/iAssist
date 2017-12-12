<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function sign_in(){
		 	$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->Login_model->signin($email,$password))
			{

				if($this->Login_model->accountstatus($email)) // if user has completed the profile
				{
					//create an html file for creating and showing the data from the database
					//then proceed to getting the data from database.
					//show an html first to test the connection. 
					//create an html wherein the user while be advised to complete his/her profile. 
					//show info
					$this->load->view('freelance/header');
					$this->load->view('freelance/profile');
					$this->load->view('freelance/footer');	
				}
				else
				{
					//prompt profile completions
					$this->load->view('freelance/header');
					$this->load->view('freelance/create-profile');
					$this->load->view('freelance/footer');	
				}
				
			}
			else
				{
					$this->session->set_flashdata('error','Invalid email or password');
					redirect(base_url().'home');
				}
	}
	public function thread()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/thread');
		$this->load->view('freelance/footer');
	}

	public function sign_up(){

			$this->load->view('templates/header');
			$this->load->view('pages/sign-up');
			$this->load->view('templates/footer');
		}
	public function sign_up_validation(){
		
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('cpassword','Confirm Password', 'required');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		 if($this->form_validation->run() == true )
		 {
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if($this->Login_model->signup($email,$password))//if the model function is true.
			{
				redirect(base_url().'login/sign_in');
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