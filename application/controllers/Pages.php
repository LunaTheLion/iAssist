<?php 
	class Pages extends CI_Controller{
		public function view($page = 'home')
		{
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				show_404();
			}
			$data['title'] = ucfirst($page);
			//echo "Hello";
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
		public function send_email()
		{
			echo $_POST['name'];
			echo $_POST['email'];
			echo $_POST['subject'];
		}
	}