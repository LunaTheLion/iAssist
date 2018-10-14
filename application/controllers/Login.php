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
	        //$this->load->helper(array('form','captcha'));
	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[8]');
	        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
	        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
	        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	     //   $this->form_validation->set_rules('captcha', 'Captcha', 'callback_validate_captcha');

	        if ($this->form_validation->run() == FALSE)
	        {
	        		$this->load->view('templates/header');
	                $this->load->view('pages/sign-up');
	                $this->load->view('templates/footer');
	        }
	        else
	        {	
	        		$accType = $this->input->post('account_type');
	        		$email = $this->input->post('email');
	        		$password = $this->input->post('password');
	        		$username = $this->input->post('username');
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

	        		if($this->Login_model->signup($username,$email,$password,$pass,$accType))
	        		{

	        			$this->session->set_userdata('email', $email);		
	        			redirect(base_url().'Tools/send_email/'.$email.'/'.$pass);
	        		}
	        		else
	        		{
	        			$username = $this->input->post('username');
	        			$email = $this->input->post('email');
	        			$this->load->view('templates/header');
	        	        $this->load->view('pages/sign-up');
	       		        $this->load->view('templates/footer');
	        		}
	        }
	}

	public function sign_in(){

		$data = $this->session->has_userdata('username');
		if(empty($data))
		{
			 	$email = $this->input->post('email');
				$password = $this->input->post('password');
				$cpassword =$this->input->post('cpassword');
				
				if($this->Login_model->signin($email,$password))
				{
					$status = $this->Login_model->check_account($email);
					// upon signing in you are logged in. until you click the logout.
					//echo $status;
					if($status == 1)
					{
						$this->session->set_userdata('Account_Status', $astatus);
						if($this->Login_model->accountstatus($email)) // if user has completed the profile
						{	

							$this->session->set_userdata('email',$email);
							$get_user = $this->Login_model->get_username($email);
							if(!empty($get_user))
							{
								$user = $get_user->account_username;
								$this->session->set_userdata('log_status',1);
								redirect(base_url().'user/general/'.$email);
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
							redirect(base_url().'user/general/'.$email);
						}	
					}
					else
					{
						//$this->session->set_flashdata('error','Invalid email or password');
						$this->load->view('templates/header');
						$this->load->view('pages/open_ur_email');
						$this->load->view('templates/footer');
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
		elseif(!empty($data))
		{
			redirect('user/general/'.$this->session->userdata('email'));
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