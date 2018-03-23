<?php
 if(!defined('BASEPATH'))exit('No direct script access allowed');

class Messaging extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('Message_model');
		
	}

	public function message()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/footer');
	}

	public function compose()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/messaging/compose');
		$this->load->view('freelance/footer');
	}
	public function sent()
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
				'msg_date' => date('Y-m-d H:i:s'),
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

					$this->load->view('freelance/header', $msg);
					$this->load->view('freelance/messaging/list');
					$this->load->view('freelance/messaging/sent', $get);
					$this->load->view('freelance/footer');

				}
				else
				{	
					echo "Not getting the Mails";
				}





				// $this->load->view('freelance/header', $msg);
				// $this->load->view('freelance/messaging/list');
				// $this->load->view('freelance/messaging/sent');
				// $this->load->view('freelance/footer');
			}
			else
			{
				// echo "Message Not Saved";
				$this->load->view('freelance/header', $msg);
				$this->load->view('freelance/messaging/list');
				$this->load->view('freelance/messaging/compose');
				$this->load->view('freelance/footer');

			}

			// if($this->Message_model->msg_info($msgInfo) )
			// {
			// 	echo "Message Saved";
			// }
			// else
			// {
			// 	echo "Message Not Saved";
			// }
			//$this->Message_model->msg_info($msgInfo);

			
		}

		else
		{
			echo "Something is wrong";
		}


		
	}

	public function inbox()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/messaging/inbox');
		$this->load->view('freelance/footer');
	}
	
	public function trash()
	{
		$this->load->view('freelance/header');
		$this->load->view('freelance/messaging/list');
		$this->load->view('freelance/messaging/trash');
		$this->load->view('freelance/footer');
	}



}
?>