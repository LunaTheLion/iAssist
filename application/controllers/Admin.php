<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function sign_in()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/success_sign_in');
		$this->load->view('admin/footer');
	} 
	public function success_sign_in()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/success_sign_in');
		$this->load->view('admin/footer');
	}
	public function create_profile()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/create_profile');
		$this->load->view('admin/footer');
	}
	public function validate_create_profile()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/create_profile');
		$this->load->view('admin/footer');
	}

}

