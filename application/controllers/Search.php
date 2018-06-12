<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Search_Model');
		
	}

	public function order_project($slug)
	{
		$id = substr($slug, -2);

		$post = $this->Search_Model->get_email($id);
		// print_r($post);
		$email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->Search_Model->get_post($id),
			'publisher' 	=>	$this->Search_Model->get_owner($email), 
			'proj'			=>  $this->Search_Model->get_more_proj($email),
		);


		$this->load->view('freelance/header');
		$this->load->view('freelance/project-order', $view);
		$this->load->view('freelance/footer');
	}
	public function payment()
	{		
		$this->load->view('freelance/header');
		$this->load->view('freelance/payment');
		$this->load->view('freelance/footer');
	}

	public function find()
	{

		$this->Search_Model->result();
		$this->load->view('freelance/header');
		$this->load->view('freelance/thread');
		$this->load->view('freelance/footer');

		 
	}
	public function view_projects($slug)
	{	

		$id = substr($slug, -2);
	

		$post = $this->Search_Model->get_email($id);
		// print_r($post);
		$email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->Search_Model->get_post($id),
			'publisher' 	=>	$this->Search_Model->get_owner($email), 
			'proj'			=>  $this->Search_Model->get_more_proj($email),
		);

		$this->load->view('freelance/header');
		$this->load->view('freelance/view-project', $view);
		$this->load->view('freelance/footer');
	}
	
	public function request_service()
	{

	
		$request = array(
				'request'=> $this->session->userdata('request'),
				'request-category' => $this->session->userdata('request-category'),
				'request-subcategory' => $this->session->userdata('request-subcategory'),
				'request-delivery' => $this->session->userdata('request-delivery'),
				'request-amount' => $this->session->userdata('request-amount'),
			);
			$this->session->set_userdata($request);

		$this->load->view('freelance/header', $request);
		$this->load->view('freelance/project-request');
		$this->load->view('freelance/footer');






	}
	public function validate_request_service()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('find', 'Description', 'required');
		// $this->form_validation->set_rules('category', 'Givename', 'required');
		//$this->form_validation->set_rules('subcategory', 'Username', 'required');
		// $this->form_validation->set_rules('time', 'Request Deliveryr', 'required');
		// $this->form_validation->set_rules('amount', 'Request Amount', 'required');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		$cat = $this->input->post('category');
		$ci = "";
		if($cat == "VAA")
		{
			$ci = "Video & Animation";
		}
		elseif($cat == "GAD")
		{
			$ci = "Graphics & Design";
		}
		elseif($cat == "DM")
		{
			$ci = "Digital Marketing";
		}
		elseif($cat == "WAT")
		{
			$ci = "Writing & Translation";
		}
		elseif($cat == "MAA")
		{
			$ci = "Music & Audio";
		}
		elseif($cat == "PAT")
		{
			$ci = "Programming & Tech";
		}
		elseif($cat == "BUS")
		{
			$ci = "Business";
		}
		elseif($cat == "FAL")
		{
			$ci = "Fun & Lifestyle";
		}



		$this->session->set_userdata('request', $this->input->post('find'));
		$this->session->set_userdata('request-category', $ci);
		$this->session->set_userdata('request-subcategory', $this->input->post('sub-category'));
		$this->session->set_userdata('request-delivery', $this->input->post('time'));
		$this->session->set_userdata('request-amount', $this->input->post('amount'));

		if($this->form_validation->run())
		{
			$request = array(
				'request'=> $this->session->userdata('request'),
				'request-category' => $this->session->userdata('request-category'),
				'request-subcategory' => $this->session->userdata('request-subcategory'),
				'request-delivery' => $this->session->userdata('request-delivery'),
				'request-amount' => $this->session->userdata('request-amount'),
			);
			$this->session->set_userdata($request);
			$this->load->view('freelance/header', $request);
			$this->load->view('freelance/project-request-success');
			$this->load->view('freelance/footer');
			// echo $this->input->post('subcategory');
		}
		else
		{
			// $this->session->set_flashdata('error','wht');	
			redirect(base_url('search/request_service'));
		}

		
	}


	

	public function buy_project($slug)
	{
		
		$id = substr($slug, -2);
		// $post = $this->Search_Model->get_email($id);
		// $email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->Search_Model->get_post($id),
			// 'publisher' 	=>	$this->Search_Model->get_owner($email), 
			// 'proj'			=>  $this->Search_Model->get_more_proj($email),
		);
		$this->load->view('freelance/header');
		$this->load->view('freelance/buy-project', $view);
		$this->load->view('freelance/footer');
	}
}


?>