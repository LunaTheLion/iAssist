<?php 
if(!defined('BASEPATH'))exit('No direct script allowed');

class User extends CI_CONTROLLER{
	public function  __construct(){
		parent:: __construct();
		$this->load->model('User_Model');
	}


	public function new_user($email,$code)
	{
		//$code = substr($email, -8);
		// echo $code;
		// echo $email;
		$verify = $this->User_Model->account_verified($email);
		$confirm = $this->User_Model->code_match($email,$code);

		if( $confirm == true)
		{
			$get = $this->User_Model->get_important($email);
			if(!empty($get))
			{
				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
				);
				$this->session->set_userdata($sess_data);
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
				);
				$this->load->view('freelance/header', $sess_data);
				$this->load->view('freelance/create-profile-side-nav');
				$this->load->view('freelance/create-educ-profile');
				// $this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/footer');
				// echo "<pre>";
				// print_r($get);	
				// echo "</pre>";
			}
			else
			{
				//echo "Empty";
				show_404();
			}
		}
		else if(!empty($verify))
		{
			$get = $this->User_Model->get_important($email);
			if(!empty($get))
			{

				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
				);
				$this->session->set_userdata($sess_data);
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
				);
				$this->load->view('freelance/header', $sess_data);
				$this->load->view('freelance/create-profile-side-nav');
				$this->load->view('freelance/create-educ-profile');
				// $this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/footer');
				// echo "<pre>";
				// print_r($get);	
				// echo "</pre>";
			}
			else
			{
				//echo "Empty";
				show_404();
			}
		}
		else
		{
			show_404();
		}

		
	
	}
	public function educ()
	{
		$email= $this->session->userdata('email');
		$get = $this->User_Model->get_important($email);
			if(!empty($get))
			{

				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
				);
				$this->session->set_userdata($sess_data);
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
				);
				$this->load->view('freelance/header', $sess_data);
				$this->load->view('freelance/create-profile-side-nav');
				$this->load->view('freelance/create-educ-profile');
				// $this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/footer');
				// echo "<pre>";
				// print_r($get);	
				// echo "</pre>";
			}
			else
			{
				//echo "Empty";
				show_404();
			}
	}

	public function general($email)
	{
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$h = $this->User_Model->get_profile($email);
		$post= $this->User_Model->get_post($email);

		if(empty($h))// new user
		{
			if(empty($post))
			{
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
				);
				$this->load->view('freelance/header', $sess_data);
				$this->load->view('freelance/create-profile-side-nav');
				$this->load->view('freelance/create-educ-profile');
				// $this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/footer');
			}
			
			else
			{

				//$get= $this->User_Model->get_post($email);
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
					'data2' =>$this->User_Model->get_post($email),
				);
				// echo "<pre>";
				// print_r($get);
				// echo "</pre>";
				$this->load->view('freelance/header', $sess_data);
				$this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/footer');
			}
		}
		else
		{
			//echo " its not";


			$fetch = array(
				'data' => $this->User_Model->get_profile($email),
			);
			$this->load->view('freelance/header', $sess_data);
			$this->load->view('freelance/new-profile', $fetch);
			$this->load->view('freelance/footer');

		}

	}//general
	

	public function account()
	{
		$email = $this->session->userdata('email');
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		echo "This is account, change your password, username, add contact info";
		$this->load->view('freelance/footer');
	}


	public function create_post()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/create-post');
		$this->load->view('freelance/footer');
	}
	public function delete_post($id)
	{
		//$u = $this->uri->segment(3);

		$this->User_Model->del_post($id);
		redirect('user/general/'.$this->session->userdata('email'), 'refresh');
	}
	public function validate_post()
	{

		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('skill', 'Skill', 'trim|required');
		$this->form_validation->set_rules('rate', 'Rate/Hour', 'trim|required');
		$this->form_validation->set_rules('budget', 'Budget', 'trim|required');
		$this->form_validation->set_rules('category', 'Category', 'trim|required');





		if ($this->form_validation->run() == FALSE)
		{
		  	
		   	$this->load->view('freelance/header', $sess_data);
		   	$this->load->view('freelance/side-nav');
			$this->load->view('freelance/create-post');
			$this->load->view('freelance/footer');
		}
		else
		{	
			//success
			$post_data = array(
				'title'		  =>$this->input->post('title'),
				'title_slug'  =>url_title($this->input->post('title')),
				'description' =>$this->input->post('description'),
				'skill'		  =>$this->input->post('skill'),
				'rate'		  =>$this->input->post('rate'),
				'budget'	  =>$this->input->post('budget'),
				'category'	  =>$this->input->post('category'),
				'date_created'=>date('Y-m-d H:i:s'),
				'creator' 	  =>$this->session->userdata('email')

		);
			$this->User_Model->insert_post($post_data, $this->session->userdata('email'));
			unset($_POST['title']);
   			unset($_POST['description']);
    		unset($_POST['skill']);
    		unset($_POST['rate']);
    		unset($_POST['budget']);
    		unset($_POST['category']);

			$this->load->view('freelance/header', $sess_data);
			$this->load->view('freelance/side-nav');
			$this->load->view('freelance/create-post');
			$this->load->view('freelance/footer');
		}


		
	}

	public function Skill()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/skill');
		$this->load->view('freelance/footer');
	}
	public function Project()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/project');
		$this->load->view('freelance/footer');
	}
	public function Interest()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/interest');
		$this->load->view('freelance/footer');
	}
	public function sample4()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/create-post');
		$this->load->view('freelance/footer');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/home','refresh');
	}









}// end of the controller


 ?>