<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('session');
		
	}



	public function validate()
	{
	        $this->load->helper(array('form'));
	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
	        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
	        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	        
	        if ($this->form_validation->run() == FALSE)
	        {
	        		$this->load->view('templates/header');
	                $this->load->view('pages/sign-up');
	                $this->load->view('templates/footer');
	        }
	        else
	        {	
	        		$email = $this->input->post('email');
	        		$password = $this->input->post('password');

	        		$chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
	        		srand((double)microtime()*1000000); 
	        		$i = 0; 
	        		$pass = '' ; 

	        		while ($i <= 7) { 
	        		    $num = rand() % 33; 
	        		    $tmp = substr($chars, $num, 1); 
	        		    $pass = $pass . $tmp; 
	        		    $i++; 
	        		} 

	        		if($this->Login_model->signup($email,$password,$pass))
	        		{

	        			$this->session->set_userdata('email', $email);		
	        			redirect(base_url().'Tools/send_email/'.$email.'/'.$pass);
	        		}
	        		else
	        		{
	        			
	        			$this->load->view('templates/header');
	        	        $this->load->view('pages/sign-up');
	       		        $this->load->view('templates/footer');
	        		}

	        		
					// $password = $this->input->post('password');
					// $cpassword =$this->input->post('cpassword');

	    //     		$this->load->view('templates/header');
	    //     	    // $this->load->view('freelance/confirmation');
	    //     	    echo $email;
	    //     	    echo $password;
	    //     	    echo $cpassword;
	    //     	    $this->load->view('templates/footer');
	                

	        }
	}

	

	public function sign_in(){

		 	$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cpassword =$this->input->post('cpassword');
			
			if($this->Login_model->signin($email,$password))
			{
				$astatus = $this->Login_model->accountstatus($this->session->userdata('email'));
				// upon signing in you are logged in. until you click the logout.
				$this->session->set_userdata('Account_Status', $astatus);
				if($this->Login_model->accountstatus($email)) // if user has completed the profile
				{	

					$this->session->set_userdata('email',$email);
					$get_user = $this->Login_model->get_username($email);
					if(!empty($get_user))
					{
						$user = $get_user->account_username;
						$this->session->set_userdata('log_status',1);
						redirect(base_url().'users/general');
					}
					else{
						echo "Error";
					}	
				}
				else
				{
					//prompt profile completions
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('log_status',1);
					//$this->session->set_userdata('',);
					redirect(base_url().'users/general/'.$email);
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
	
	

}


?>