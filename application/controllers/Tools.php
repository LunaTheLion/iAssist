<?php
 if(!defined('BASEPATH'))exit('No direct script access allowed');

class Tools extends CI_Controller{

	public function __construct(){

		parent::__construct();
	
		
	}
	
	function send_email(){

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'iassistumak',//@gmail.com
			'smtp_pass' => 'iassistumakdeveloper',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->load->library('email', $config);
		$this->email->from('iassistumak@gmail.com');
		$this->email->to('elonasquared@gmail.com');
		$this->email->subject('Sample Subject');
		//$msg = 'Click on this link to sign in - <a></a>'
		$msg = "Thank you for signing up ! <a href='http://localhost/iAssist/users/general/''>Click me to register to iAssist</a>";
		$this->email->message($msg);
		$this->email->set_newline("\r\n");

		// 'Click on this link - <a http://localhost/Registration_Demo/update_verification_status/update_code='.$verification_code.'>http://localhost/Registration_Demo/update_verification_status/update_code='.$verification_code.'</a>';

		// $this->email->send();
		// $this->email->print_debugger();

		if($this->email->send()){
		    echo 'Email Send';
		    $this->load->view('templates/header');
		    $this->load->view('freelance/Confirmation');
		    $this->load->view('templates/footer');
		    }   else{
		        show_error($this->email->print_debugger());
		    }
		
		
	}




	}


	?>