<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Search_Model');
		
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
	public function edit_projects($slug)
	{	

		$id = substr($slug, -2);
		$post = $this->Search_Model->get_email($id);
		$email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->Search_Model->get_post($id),
			'publisher' 	=>	$this->Search_Model->get_owner($email), 
			'proj'			=>  $this->Search_Model->get_more_proj($email),
		);

		$this->load->view('freelance/header');
		$this->load->view('freelance/edit-projects', $view);
		$this->load->view('freelance/footer');
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