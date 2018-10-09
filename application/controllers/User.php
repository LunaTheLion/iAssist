<?php 
if(!defined('BASEPATH'))exit('No direct script allowed');

class User extends CI_CONTROLLER{
	public function  __construct(){
		parent:: __construct();
		$this->load->model('User_Model');
	}
	public function new_user($email,$code)
	{
		$confirm = $this->User_Model->code_match($email,$code);
		$check = $this->User_Model->account_verified($email,$code);
	

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
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/new-account-side-nav');
				$this->load->view('freelance/new-account');
				$this->load->view('freelance/template/footer');
			}
		}
		else if ( $check == true)
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
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/new-account-side-nav');
				$this->load->view('freelance/new-account');
				$this->load->view('freelance/template/footer');
				

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
				$data['college']= $this->User_Model->get_college();
				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
				);
				$this->session->set_userdata($sess_data);
				$fetch = array(
					'data' => $this->User_Model->create_profile($email),
				);
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/new-account-side-nav');
				$this->load->view('freelance/create-educ-profile',$data);
				// $this->load->view('freelance/new-profile',$fetch);
				$this->load->view('freelance/template/footer');
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
	public function v_personal()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
		);
		$this->session->set_userdata($sess_data);
		
		$this->form_validation->set_error_delimiters('<span class=error>', '</span>');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'trim|required');
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		$this->form_validation->set_rules('houseNo', 'House Number', 'trim|required');
		$this->form_validation->set_rules('street', 'Street', 'trim|required');
		$this->form_validation->set_rules('brngy', 'Barangay', 'trim|required');
		$this->form_validation->set_rules('mncpl', 'Municipal', 'trim|required');

		if($this->form_validation->run() == FALSE )
		{			
			//if it didn't meet the Requirements
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/new-account-side-nav');
			$this->load->view('freelance/new-account.php');
			$this->load->view('freelance/template/footer');

		}
		else
		{	//success filling out the form
			$email = $this->session->userdata('email');
			$this->User_Model->create_personal_profile($email);
			redirect('user/educ','refresh');				
		}



	}
	public function v_educ()
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
		$this->form_validation->set_rules('colleges', 'College', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('cmajor', 'Major', 'trim|required');
		if($this->form_validation->run() ==FALSE)
		{
			$educ_data = array(
				'ed_account_email' => $this->session->userdata('email'),
				'ed_college' => $this->input->post('College'),
				'ed_focus_of_study' =>$this->input->post('cmajor'),
			);
			$save = $this->User_Model->insert_educ($educ_data);
			if($save)
			{

				redirect('user/skill','refresh');
			}
			else
			{
				//echo "Data not saved";
				redirect('user/educ','refresh');
			}
			
	
		}
		else
		{
			redirect('user/educ','refresh');
		}
	
	}
	public function get_major()
	{
		$college = $this->input->post('college_id');
		$majors = $this->User_Model->get_major_id($college);
		if(count($majors) > 0 )
		{
			$pro_select_box = '';
			$pro_select_box .= '<option value="">Select Course';
			foreach ($majors as $major) {
				$pro_select_box .= "<option value='". $major->course ."'>".$major->course."";
			}
			echo json_encode($pro_select_box);
		}
		//echo json_encode($pro_select_box);
	}

	public function general($email)
	{
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$one =array('h'=>$this->User_Model->get_account_info($email));

		
		if($one == true)//is true or has complete account 
		{


			$this->load->view('freelance/template/header', $sess_data);
			//$this->load->view('freelance/new-profile-side',$one);
			$this->load->view('freelance/new2-profile-side', $one);
			$this->load->view('freelance/new-profile-body');
			$this->load->view('freelance/template/footer');
		}
		else if($one == false) // no account
		{
			$fetch = array(
				'data' => $this->User_Model->create_profile($email),
			);
			$this->load->view('freelance/header', $sess_data);
			$this->load->view('freelance/new-account-side-nav');
			$this->load->view('freelance/new-account');
			$this->load->view('freelance/footer');
		}
		


	}//general
	
	public function user_profile()
	{
		$email = $this->session->userdata('email');
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$check_account = $this->User_Model->check_account($email);
		$check_educ = $this->User_Model->check_educ($email);
		

		if($check_account == true && $check_educ == true)
		{
			$account = array(
				'acc' => $this->User_Model->get_profile($email),
				'educ' =>$this->User_Model->get_educ_info($email),
				'skill' => $this->User_Model->get_skill($email),
			);

			$this->session->set_userdata($sess_data);
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/new-profile-side');
			$this->load->view('freelance/get-user-profile',$account);
			$this->load->view('freelance/template/footer');
		}
		else
		{
			$account = array(
				'acc' => $this->User_Model->get_account_info($email),
			);
			
			$this->session->set_userdata($sess_data);
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/new-profile-side');
			$this->load->view('freelance/get-user-profile',$account);
			$this->load->view('freelance/template/footer');
		}

		
	}
	public function account()
	{
		$email = $this->session->userdata('email');
		$get = $this->User_Model->get_important($email);
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/account-setting');
		$this->load->view('freelance/template/footer');
	}


	public function create_post()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/create-post');
		$this->load->view('freelance/template/footer');
	}
	public function delete_post($id)
	{
		//$u = $this->uri->segment(3);

		$this->User_Model->del_post($id);
		redirect('user/general/'.$this->session->userdata('email'), 'refresh');
	}
	public function v_project()
	{

		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
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
		  	
		   	$this->load->view('freelance/template/header', $sess_data);
		   	$this->load->view('freelance/side-nav');
			$this->load->view('freelance/create-post');
			$this->load->view('freelance/template/footer');
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

			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/side-nav');
			$this->load->view('freelance/create-post');
			$this->load->view('freelance/template/footer');
		}


		
	}

	public function Skill()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-account-side-nav');
		$this->load->view('freelance/skill');
		$this->load->view('freelance/template/footer');
	}
	public function v_skill()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('skill','Skill','required');
		$this->form_validation->set_rules('category','Category','required');
		if($this->form_validation->run()== false)
		{
			//echo "Hello";
			redirect('user/skill');
		}
		else
		{
			//echo "What is wrong";
			$skills = array(
				'skill_email' => $this->session->userdata('email'),
				'skill_category' => $this->input->post('category'),
				'skill' => $this->input->post('skill'),
				'skill_created' => date('Y-m-d g:i'),
			);
			$j = $this->User_Model->insert_profile_skill($skills);
			if( $j == true)
			{
				redirect('user/interest', 'refresh');
			}
			else
			{
				show_404();
			}
			
		}
		//redirect('user/skill');
		// $this->load->view('freelance/template/header', $sess_data);
		// $this->load->view('freelance/side-nav');
		// $this->load->view('freelance/interest');
		// $this->load->view('freelance/template/footer');
	}
	public function Project()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-account-side-nav');
		$this->load->view('freelance/project');
		$this->load->view('freelance/template/footer');
	}
	
	public function Interest()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-account-side-nav');
		$this->load->view('freelance/interest');
		$this->load->view('freelance/template/footer');
	}
	public function sample4()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/side-nav');
		$this->load->view('freelance/create-post');
		$this->load->view('freelance/template/footer');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/home','refresh');
	}

	public function bayad()
	{
		
		$this->load->view('freelance/template/header');
		$this->load->view('freelance/payment/products');
		$this->load->view('freelance/template/footer');
	}
	public function thread()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' => $this->User_Model->new_job(),
		);
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/user-nav');
		$this->load->view('freelance/thread',$job_posts);
		$this->load->view('freelance/template/footer');
	}
	public function getThread()
	{
		$getData = $this->User_Model->get_thread();
		 echo json_encode($getData);
	}
	public function PostJob()
	{	

	$data_in['title'] = $this->input->post('title');
	$data_in['post_type'] = 'Job';
	$data_in['post_username'] = $this->session->userdata('username');
	$data_in['title_slug'] = urlencode($this->input->post('title'));
	$data_in['description'] = $this->input->post('description');
	$data_in['category'] = $this->input->post('category');
	$data_in['category_slug'] =urlencode( $this->input->post('category'));
	$data_in['budget'] = $this->input->post('offer');
	$data_in['date_created'] = date('Y-m-d g:i');
	$data_in['creator'] = $this->session->userdata('email');
	$data_in['status'] = 0;

	$result = $this->User_Model->insert_job_post($data_in);
	echo json_encode($result);

	}
	public function PostSkill()
	{	

	$data_in['title'] = $this->input->post('title');
	$data_in['post_type'] = 'Skill';
	$data_in['post_username'] = $this->session->userdata('username');
	$data_in['title_slug'] = urlencode($this->input->post('title'));
	$data_in['description'] = $this->input->post('description');
	$data_in['category'] = $this->input->post('category');
	$data_in['category_slug'] =urlencode( $this->input->post('category'));
	$data_in['budget'] = $this->input->post('offer');
	$data_in['date_created'] = date('Y-m-d g:i');
	$data_in['creator'] = $this->session->userdata('email');
	$data_in['status'] = 0;
	$this->session->set_userdata($data_in);
	$result = $this->User_Model->insert_skill_post($data_in);
	echo json_encode($data_in);
	}
	public function PostSkill_with_image()
	{	
			$this->load->helper('form');
			$this->form_validation->set_error_delimiters('<span class=error>', '</span>');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('offer', 'Offer', 'trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');

			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	         $this->load->library('upload', $config);

	        // && !$this->upload->do_upload('userfile')
	         //$this->form_validation->run() == FALSE ||
			if( !$this->upload->do_upload('userfile') || $this->form_validation->run() == FALSE )
			{ // input fail
				
				if($this->form_validation->run() == FALSE)
				{
					$get = $this->User_Model->get_important($this->session->userdata('email'));
					$sess_data = array(
						'id' => $get->account_id,
						'email' =>$get->account_email,
						'username' => $get->account_username,
						'img' =>$get->account_img,
						);
					//print_r($error);
					$this->session->set_userdata($sess_data);
					$this->load->view('freelance/template/header', $sess_data);
					$this->load->view('freelance/skill/side-user-skill');
					$this->load->view('freelance/skill/create-skill-posting');
					$this->load->view('freelance/template/footer');

				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					$get = $this->User_Model->get_important($this->session->userdata('email'));
					$sess_data = array(
						'id' => $get->account_id,
						'email' =>$get->account_email,
						'username' => $get->account_username,
						'img' =>$get->account_img,
					);
					//print_r($error);
					$this->session->set_userdata($sess_data);
					$this->load->view('freelance/template/header', $sess_data);
					$this->load->view('freelance/skill/side-user-skill', $error);
					$this->load->view('freelance/skill/create-skill-posting');
					$this->load->view('freelance/template/footer');

				}

				 
				$get = $this->User_Model->get_important($this->session->userdata('email'));
				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
					'img' =>$get->account_img,
				);
				
				$this->session->set_userdata($sess_data);
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/skill/side-user-skill', $error);
				$this->load->view('freelance/skill/create-skill-posting');
				$this->load->view('freelance/template/footer');

			}
			else
			{// success input
				 $data = array(
	                	'upload_data' => $this->upload->data()
	                );
	                $file_data = $this->upload->data();
	                $data['img'] = $file_data['file_name'];
	                $image =  $file_data['file_name'];

	                $insert_db = $this->User_Model->insert_skill($image);
	                if($insert_db)
	                {
	                	//echo 'saved';
	                	unset($_POST['title']);
	                	unset($_POST['description']);
	                	unset($_POST['category']);
	                	unset($_POST['offer']);

	                	$get = $this->User_Model->get_important($this->session->userdata('email'));
	                	$sess_data = array(
	                	'id' => $get->account_id,
	                	'email' =>$get->account_email,
	                	'username' => $get->account_username,
	                	'img' =>$get->account_img,
	                	);
	                echo "<script>alert('Your Skill Post is saved and will be reviewed by the Admin first, before posting.')</script>";
	                $this->session->set_userdata($sess_data);
	                $this->load->view('freelance/template/header', $sess_data);
	                $this->load->view('freelance/skill/side-user-skill',$data);
	                $this->load->view('freelance/skill/create-skill-posting');
	                $this->load->view('freelance/template/footer');
	                }
	                else
	                {
	                		$get = $this->User_Model->get_important($this->session->userdata('email'));
	                		$sess_data = array(
	                		'id' => $get->account_id,
	                		'email' =>$get->account_email,
	                		'username' => $get->account_username,
	                		'img' =>$get->account_img,
	                		);
	                	echo "<script>alert('Sorry, your Skill post is not saved.')</script>";
	                	$this->session->set_userdata($sess_data);
	                	$this->load->view('freelance/template/header', $sess_data);
	                	$this->load->view('freelance/skill/side-user-skill',$data);
	                	$this->load->view('freelance/skill/create-skill-posting');
	                	$this->load->view('freelance/template/footer');
	                }   
			}
	}
	public function upload_image_skill()
	{
		 	$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('userfile'))
	        {
	                $error = array('error' => $this->upload->display_errors());

	                $get = $this->User_Model->get_important($this->session->userdata('email'));
				$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
					'img' =>$get->account_img,
				);

				$this->session->set_userdata($sess_data);
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/skill/side-user-skill', $error);
				$this->load->view('freelance/skill/create-skill-posting');
				$this->load->view('freelance/template/footer');
	        }
	        else
	        {
	                $data = array(
	                	'upload_data' => $this->upload->data()
	                );
	                $file_data = $this->upload->data();
	                $data['img'] = $file_data['file_name'];
	                $image =  $file_data['file_name'];
	               // $this->User_Model->saveImg($image);
	                echo $image;
	                $get = $this->User_Model->get_important($this->session->userdata('email'));
					$sess_data = array(
					'id' => $get->account_id,
					'email' =>$get->account_email,
					'username' => $get->account_username,
					'img' =>$get->account_img,
				);

				$this->session->set_userdata($sess_data);
				$this->load->view('freelance/template/header', $sess_data);
				$this->load->view('freelance/skill/side-user-skill',$data);
				$this->load->view('freelance/skill/create-skill-posting');
				$this->load->view('freelance/template/footer');


	                
	        }
	}
	public function countJobPost()
	{
		$result = $this->User_Model->count_user_job_post();
		echo json_encode($result); 
	}
	public function countAllPost()
	{
		$result = $this->User_Model->count_all_user_post();
		echo json_encode($result);
	}
	public function Post()
	{
		//echo $this->input->post('PostDesc');
		$insert = $this->User_Model->insert_regular_post();
		if($insert)
		{
			redirect('user/general/'.$this->session->userdata('email'), 'refresh');
		}
	}
	public function get_job_post()
	{
		$getData = $this->User_Model->get_user_job_post();
		//print_r()
		 echo json_encode($getData);
	}
	public function get_skill_post()
	{
		$getData = $this->User_Model->get_user_skill_post();
		//print_r()
		 echo json_encode($getData);
	}
	public function get_request_post()
	{
		$getData = $this->User_Model->get_user_request_post();
		//print_r()
		 echo json_encode($getData);
	}
	public function user_post()
	{

	}
	public function RequestPost()
	{
		$result = $this->User_Model->request_post();
		if($result)
		{
			echo "<script>alert('Your Request will be posted once approved by the Admin.')</script>";
			//redirect('user/thread','refresh');
			echo "<script>window.history.back();</script>";
		}
		else
		{
			echo "<script>alert('Sorry, cannot generate your request, please try later.')</script>";
			echo "<script>window.history.back();</script>";
			//redirect('user/thread','refresh');
		}

	}
	public function ProfilePic()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-profile-side');
		$this->load->view('freelance/profile_pic');
		$this->load->view('freelance/template/footer');
	}
	public function countRequestPost()
	{
		$result = $this->User_Model->count_user_request_post();
		echo json_encode($result);
	}
	
	public function do_upload()
	{
	        $config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('userfile'))
	        {
	                $error = array('error' => $this->upload->display_errors());

	                $get = $this->User_Model->get_important($this->session->userdata('email'));
	                $sess_data = array(
	                	'id' => $get->account_id,
	                	'email' =>$get->account_email,
	                	'username' => $get->account_username,
	                	'img' =>base_url().'/uploads/'.$get->account_img,
	                );
	                
	                $this->session->set_userdata($sess_data);
	                $this->load->view('freelance/template/header', $sess_data);
	                $this->load->view('freelance/new-profile-side');
	                $this->load->view('freelance/profile_pic', $error);
	                $this->load->view('freelance/template/footer');
	        }
	        else
	        {
	                $data = array(
	                	'upload_data' => $this->upload->data()
	                );
	                $file_data = $this->upload->data();
	                $data['img'] = $file_data['file_name'];
	                $image =  $file_data['file_name'];
	                $this->User_Model->saveImg($image);



	                $get = $this->User_Model->get_important($this->session->userdata('email'));
	                $sess_data = array(
	                	'id' => $get->account_id,
	                	'email' =>$get->account_email,
	                	'username' => $get->account_username,
	                	'img' =>base_url().'/uploads/'.$get->account_img,
	                );
	                
	                $this->session->set_userdata($sess_data);
	                $this->load->view('freelance/template/header', $sess_data);
	                $this->load->view('freelance/new-profile-side');
	                $this->load->view('freelance/profile_pic', $data);
	                $this->load->view('freelance/template/footer');
	        }
	}
	public function SkillPost()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-profile-side');
		$this->load->view('freelance/user-skill');
		$this->load->view('freelance/template/footer');
	}
	public function submitSkillPost()
	{
		$data_in['title'] = $this->input->post('Ptitle');
		$data_in['post_type'] = $this->input->post('TypeOfPost');
		$data_in['post_username'] = $this->session->userdata('username');
		$data_in['title_slug'] = urlencode($this->input->post('Ptitle'));
		$data_in['description'] = $this->input->post('Pdescription');
		$data_in['category'] = $this->input->post('Pcategory');
		$data_in['category_slug'] =urlencode( $this->input->post('Pcategory'));
		$data_in['budget'] = $this->input->post('Ppricing');
		$data_in['date_created'] = date('Y-m-d g:i');
		$data_in['creator'] = $this->session->userdata('email');
		$data_in['status'] = 0;
		
		$result = $this->User_Model->insert_skill_post($data_in);
		echo json_encode($result);
	}
	public function get_skill()
	{
		$getData = $this->User_Model->get_user_skill();
		 echo json_encode($getData);
	}
	public function ProjectPost()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/new-profile-side');
		$this->load->view('freelance/user-project');
		$this->load->view('freelance/template/footer');
	}
	public function submitProjectPost()
	{
		$data_in['title'] = $this->input->post('Ptitle');
		$data_in['post_type'] = $this->input->post('TypeOfPost');
		$data_in['post_username'] = $this->session->userdata('username');
		$data_in['title_slug'] = urlencode($this->input->post('Ptitle'));
		$data_in['description'] = $this->input->post('Pdescription');
		$data_in['category'] = $this->input->post('Pcategory');
		$data_in['category_slug'] =urlencode( $this->input->post('Pcategory'));
		$data_in['budget'] = $this->input->post('Ppricing');
		$data_in['date_created'] = date('Y-m-d g:i');
		$data_in['creator'] = $this->session->userdata('email');
		$data_in['status'] = 0;

		$result = $this->User_Model->insert_project_post($data_in);
		echo json_encode($result);
	}
	public function get_project()
	{
		$getData = $this->User_Model->get_user_project();
		 echo json_encode($getData);
	}
	public function ViewProject($title_slug,$id)
	{
				 
		 $check_if_owner = $this->User_Model->view_project_if_not_user($title_slug,$id);
		 if($check_if_owner)
		 {// Owner
		 		$get = $this->User_Model->get_important($this->session->userdata('email'));
		 		$sess_data = array(
		 			'id' => $get->account_id,
		 			'email' =>$get->account_email,
		 			'username' => $get->account_username,
		 			'img' =>$get->account_img,
		 		);
		 		$data = array(
		 			'proj' => $this->User_Model->view_project($title_slug, $id),
		 		);	
		 		$this->session->set_userdata($sess_data);
		 		$this->load->view('freelance/template/header', $sess_data);
		 		$this->load->view('freelance/new-profile-side');
		 		$this->load->view('freelance/view_user_project',$data);
		 		$this->load->view('freelance/template/footer');
		 }
		 else
		 {
		 	$ow = $this->User_Model->get_project_owner($id);	

		 	if($ow)
		 	{	
		 		//echo " True Creator<br>";
		 		$email = $ow->creator;
		 		$data = $this->User_Model->get_account_info($email);

		 			$get = $this->User_Model->get_important($this->session->userdata('email'));
		 			$sess_data = array(
		 				'id' => $get->account_id,
		 				'email' =>$get->account_email,
		 				'username' => $get->account_username,
		 				'img' =>$get->account_img,
		 			);
		 			$data = array(
		 				'proj' => $this->User_Model->view_project($title_slug, $id),
		 			);	
		 			$true = array(
		 				'owner' =>$this->User_Model->get_account_info($email),
		 			);
		 			// echo "<pre>";
		 			// print_r($true);
		 			// echo "</pre>";

		 			$this->session->set_userdata($sess_data);
		 			$this->load->view('freelance/template/header', $sess_data);
		 			$this->load->view('freelance/true_project_owner', $true);
		 			$this->load->view('freelance/view_user_project',$data);
		 			$this->load->view('freelance/template/footer');
		 	}
		 	else
		 	{
		 		echo "No creator";
		 	}
		 }
	}
	public function ViewJob($title_slug,$id)
	{
				 
		 $check_if_owner = $this->User_Model->view_job_if_not_user($title_slug,$id);
		 if($check_if_owner)
		 {// Owner
		 		$get = $this->User_Model->get_important($this->session->userdata('email'));
		 		$sess_data = array(
		 			'id' => $get->account_id,
		 			'email' =>$get->account_email,
		 			'username' => $get->account_username,
		 			'img' =>$get->account_img,
		 		);
		 		$data = array(
		 			'proj' => $this->User_Model->view_job($title_slug, $id),
		 		);	
		 		$this->session->set_userdata($sess_data);
		 		$this->load->view('freelance/template/header', $sess_data);
		 		$this->load->view('freelance/new-profile-side');
		 		$this->load->view('freelance/view_user_project',$data);
		 		$this->load->view('freelance/template/footer');
		 }
		 else
		 {
		 	//echo "Not Owner";
		 	$ow = $this->User_Model->get_job_owner($id);	

		 	if($ow)
		 	{	
		 		//echo " True Creator<br>";
		 		$email = $ow->creator;
		 		$data = $this->User_Model->get_account_info($email);

		 			$get = $this->User_Model->get_important($this->session->userdata('email'));
		 			$sess_data = array(
		 				'id' => $get->account_id,
		 				'email' =>$get->account_email,
		 				'username' => $get->account_username,
		 				'img' =>$get->account_img,
		 			);
		 			$data = array(
		 				'proj' => $this->User_Model->view_job($title_slug, $id),
		 			);	
		 			$true = array(
		 				'owner' =>$this->User_Model->get_account_info($email),
		 			);
		 		
		 			$this->session->set_userdata($sess_data);
		 			$this->load->view('freelance/template/header', $sess_data);
		 			$this->load->view('freelance/true_project_owner', $true);
		 			$this->load->view('freelance/view_user_project',$data);
		 			$this->load->view('freelance/template/footer');
		 	}
		 	else
		 	{
		 		echo "No creator";
		 	}
		 }
	}
	public function people()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$people= array( 
			'jobs' => $this->User_Model->get_all_people(),
		);
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/people/side-user-people');
		$this->load->view('freelance/people/Allpeople',$people);
		$this->load->view('freelance/template/footer');
	}
	public function MessageOwner()
	{

		$send = $this->User_Model->message_owner();
		if($send == true)
		{	
			echo "<script>alert('Message sent.')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
		else
		{
			echo "<script>alert('Message not sent.')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
	}
	public function countNewMessage()
	{
		$result = $this->User_Model->count_new_message();
		echo json_encode($result); 
	}
	public function notify()
	{
		$result = $this->User_Model->set_notified();
		echo json_encode($result);
	}
	public function Job()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' => $this->User_Model->new_job(),
		);
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/user-nav');
		$this->load->view('freelance/thread',$job_posts);
		$this->load->view('freelance/template/footer');
	}
	public function Request()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' => $this->User_Model->show_request(),
		);
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/request/side-user-request');
		$this->load->view('freelance/request/request',$job_posts);
		$this->load->view('freelance/template/footer');
	}
	
	public function forum()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' => $this->User_Model->get_forum_topics(),
		);
		//echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/forum/side-user-forum');
		$this->load->view('freelance/forum/forum',$job_posts);
		$this->load->view('freelance/template/footer');
	}


	public function SkillPosting()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' => $this->User_Model->get_all_skill(),
		);
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/skill/side-user-skill');
		$this->load->view('freelance/skill/skill',$job_posts);
		$this->load->view('freelance/template/footer');
	}
	public function RequestResume()
	{

	}
	public function CreateSkillPost()
	{
		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		
		// echo"<pre>";print_r($job_posts);echo"</pre>";
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/skill/side-user-skill');
		$this->load->view('freelance/skill/create-skill-posting');
		$this->load->view('freelance/template/footer');
	}
	public function ViewRequest()
	{

	}
	public function Search_Job_Criteria()
	{

		$result = $this->User_Model->search_job_criteria();
		if($result)
		{	
			$get = $this->User_Model->get_important($this->session->userdata('email'));
			$sess_data = array(
				'id' => $get->account_id,
				'email' =>$get->account_email,
				'username' => $get->account_username,
				'img' =>$get->account_img,
			);
			$job_posts = array( 
				'jobs' => $this->User_Model->search_job_criteria(),
			);
			// echo"<pre>";print_r($job_posts);echo"</pre>";
			$this->session->set_userdata($sess_data);
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/user-nav');
			$this->load->view('freelance/thread',$job_posts);
			$this->load->view('freelance/template/footer');
		}
		else
		{
			echo "<script>alert('Sorry! No match found.')</script>";
			echo "<script>
    				window.history.back();
				</script>";
			
		}
	}
	public function countVideoAnimation()
	{
		$count = $this->User_Model->countVA();
		echo json_encode($count);
	}
	public function countGraphicsDesign()
	{
		$count = $this->User_Model->countGD();
		echo json_encode($count);
	}
	public function countDigitalMarketing()
	{
		$count = $this->User_Model->countDM();
		echo json_encode($count);
	}
	public function countWritingTranslation()
	{
		$count = $this->User_Model->countWT();
		echo json_encode($count);
	}
	public function countMusicAudio()
	{
		$count = $this->User_Model->countMA();
		echo json_encode($count);
	}
	public function countProgramminTech()
	{
		$count = $this->User_Model->countPT();
		echo json_encode($count);
	}
	public function countBusiness()
	{
		$count = $this->User_Model->countB();
		echo json_encode($count);
	}
	public function countFunLifestyle()
	{
		$count = $this->User_Model->countFL();
		echo json_encode($count);
	}

	public function clickbyCategory($category)
	{
		//echo $category;
		$result = $this->User_Model->click_category($category);
		if($result)
		{	
			$get = $this->User_Model->get_important($this->session->userdata('email'));
			$sess_data = array(
				'id' => $get->account_id,
				'email' =>$get->account_email,
				'username' => $get->account_username,
				'img' =>$get->account_img,
			);
			$job_posts = array( 
				'jobs' => $result = $this->User_Model->click_category($category),
			);
			// echo"<pre>";print_r($job_posts);echo"</pre>";
			$this->session->set_userdata($sess_data);
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/user-nav');
			$this->load->view('freelance/thread',$job_posts);
			$this->load->view('freelance/template/footer');
		}
		else
		{
			echo "<script>alert('Sorry! No match found.')</script>";
			echo "<script>
    				window.history.back();
				</script>";
			
		}

	}
	public function crud_job_post()
	{
		//$data_in['id'] = $this->input->get('id');
		$result = $this->User_model->crud_user_job_post($data_in);
		//echo json_encode($result);
	}
	public function crud_project_post()
	{
		//$data_in['id'] = $this->input->get('id');
		$result = $this->User_model->crud_user_project_post($data_in);
		//echo json_encode($result);
	}


}// end of the controller


 ?>