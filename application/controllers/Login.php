<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();

	}

	public function sign_in(){
		$this->load->view('templates/header');
		$this->load->view('pages/sign-in');
		$this->load->view('templates/footer');

	}
	public function sign_up(){
		$this->load->view('templates/header');
		$this->load->view('pages/sign-up');
		$this->load->view('templates/footer');

	}


}


?>