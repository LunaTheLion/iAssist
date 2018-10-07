<?php
 if(!defined('BASEPATH'))exit('No direct script access allowed');

class Messaging extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('Message_model');
		
	}

	public function msg()
	{
		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('someone@example.com');
		$this->email->cc('another@another-example.com');	
		$this->email->bcc('another@another-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

	}
	

	public function message()
	{
		// $this->load->view('freelance/template/header');
		// $this->load->view('freelance/messaging/list');

		// $this->load->view('freelance/template/footer');

		$email = $this->session->userdata('email');
		if($this->Message_model->get_msg_info($email))
		{			

			$get = array(
				'rcv' => $this->Message_model->receive_msg($email),
			);
			
			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/inbox',$get);
			$this->load->view('freelance/template/footer');

		}
		else
		{	
			$get = array(
				'sent' => $this->Message_model->get_msg_info($email),
			);

			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/sent', $get);
			$this->load->view('freelance/template/footer');
		}


	}
	public function read($id)
	{
		if($this->Message_model->read_msg($id))
		{
			$view = array(
				'msg' =>$this->Message_model->read_msg($id),
			);
			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/read', $view);
			$this->load->view('freelance/template/footer');
		}
		else
		{

		}

		
	}
	public function view($id)
	{
		if($this->Message_model->view_msg($id))
		{
			$view = array(
				'msg' =>$this->Message_model->view_msg($id),
			);
			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/view', $view);
			$this->load->view('freelance/template/footer');
		}
		else
		{

		}
	}

	public function compose()
	{
		$this->load->view('freelance/template/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/messaging/compose');
		$this->load->view('freelance/template/footer');
	}
	public function validate_message()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('receiver', 'Email', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		$this->session->set_userdata('msg-sent-to', $this->input->post('receiver'));
		$this->session->set_userdata('msg-subject', $this->input->post('subject'));
		$this->session->set_userdata('msg-body', $this->input->post('body'));

		if($this->form_validation->run())
		{
			$msg = array(
				'msg-sent-to' => $this->session->userdata('msg-sent-to'),
				'msg-subject' => $this->session->userdata('msg-subject'),
				'msg-body' => $this->session->userdata('msg-body'),
			);	
			$this->session->set_userdata($msg);

			$sendMsg = array(
				'msg_sender' => $this->session->userdata('email'),
				'msg_receiver' =>$this->session->userdata('msg-sent-to'),
				'msg_read' => 0,
				'msg_read_date' => date('Y-m-d H:i:s'),
				'msg_block' => 0,
			);
			$msgInfo = array(
				'msg_author' => $this->session->userdata('email'),
				'msg_receiver' =>$this->session->userdata('msg-sent-to'),
				'msg_date' => date('Y-m-d H:i:s'),
				'msg_subject' => $this->session->userdata('msg-subject'),
				'msg_body' => $this->session->userdata('msg-body'),
		
			);


			if($this->Message_model->send_msg($sendMsg)  && $this->Message_model->msg_info($msgInfo) )
			{
				$email = $this->session->userdata('email');
				if($this->Message_model->get_msg_info($email))
				{
					// $getmsg = $this->Message_model->get_msg($email);				

					$get = array(
						'sent' => $this->Message_model->get_msg_info($email),
					);

					$this->load->view('freelance/template/header', $msg);
					$this->load->view('freelance/messaging/list');
					$this->load->view('freelance/messaging/sent', $get);
					$this->load->view('freelance/template/footer');

				}
				else
				{	
					echo "Not getting the Mails";
				}

				
			}
			else
			{
				// echo "Message Not Saved";
				$this->load->view('freelance/template/header', $msg);
				$this->load->view('freelance/messaging/list');
				$this->load->view('freelance/messaging/compose');
				$this->load->view('freelance/template/footer');

			}
		}
		else
		{
			echo "Something is wrong";
		}

	}
	public function sent()
	{
		$email = $this->session->userdata('email');
		if($this->Message_model->get_msg_info($email))
		{			

			$get = array(
				'sent' => $this->Message_model->get_msg_info($email),
			);

			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/sent', $get);
			$this->load->view('freelance/template/footer');

		}
		else
		{	
			$get = array(
				'sent' => $this->Message_model->get_msg_info($email),
			);

			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/sent', $get);
			$this->load->view('freelance/template/footer');
		}
	
		
	}

	public function inbox()
	{
		$email = $this->session->userdata('email');
		// if($this->Message_model->receive_msg($email))
		// {
			$get = array(
				'rcv' => $this->Message_model->receive_msg($email),
			);
			
			$this->load->view('freelance/template/header');
			$this->load->view('freelance/messaging/list');
			$this->load->view('freelance/messaging/inbox',$get);
			$this->load->view('freelance/template/footer');
		// }
		// else#no message received yet
		// {
		// 	$get = array(
		// 		'rcv' => $this->Message_model->receive_msg($email),
		// 	);
			
		// 	$this->load->view('freelance/template/header');
		// 	$this->load->view('freelance/messaging/list');
		// 	$this->load->view('freelance/messaging/inbox',$get);
		// 	$this->load->view('freelance/template/footer');
		// }
	
	}
	
	public function trash()
	{
		$this->load->view('freelance/template/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/messaging/trash');
		$this->load->view('freelance/template/footer');
	}



}
?>