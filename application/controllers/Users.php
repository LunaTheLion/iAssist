<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/profile');
		$this->load->view('freelance/footer');	
	}
	public function create_profile()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/create-profile');
		$this->load->view('freelance/footer');
	}
	public function create_profile_1()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/create-profile1');
		$this->load->view('freelance/footer');
	}
	public function create_profile_2()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/create-profile2');
		$this->load->view('freelance/footer');
	}
	public function create_profile_3()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/create-profile3');
		$this->load->view('freelance/footer');
	}
	public function create_profile_4()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/create-profile4');
		$this->load->view('freelance/footer');
	}
	
}


?>