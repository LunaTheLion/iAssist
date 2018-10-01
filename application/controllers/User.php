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
			//echo "True";
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
			$this->load->view('freelance/new-profile-side',$one);
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
		

		// $post= $this->User_Model->get_post($email);

		// if(empty($h))// new user
		// {
		// 	if(empty($post))
		// 	{
		// 		$fetch = array(
		// 			'data' => $this->User_Model->create_profile($email),
		// 		);
		// 		$this->load->view('freelance/header', $sess_data);
		// 		$this->load->view('freelance/new-account-side-nav');
		// 		$this->load->view('freelance/new-account');
		// 		$this->load->view('freelance/footer');
		// 	}
			
		// 	else
		// 	{

		// 		//$get= $this->User_Model->get_post($email);
		// 		$fetch = array(
		// 			'data' => $this->User_Model->create_profile($email),
		// 			'data2' =>$this->User_Model->get_post($email),
		// 		);
		// 		// echo "<pre>";
		// 		// print_r($get);
		// 		// echo "</pre>";
		// 		$this->load->view('freelance/header', $sess_data);
		// 		$this->load->view('freelance/new-profile',$fetch);
		// 		$this->load->view('freelance/template/footer');
		// 	}
		// }
		// else
		// {
		// 	$fetch = array(
		// 		'data' => $this->User_Model->get_profile($email),
		// 	);
		// 	$this->load->view('freelance/header', $sess_data);
		// 	$this->load->view('freelance/new-profile', $fetch);
		// 	$this->load->view('freelance/footer');
		// }

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
		// echo $_POST['skill'];
		// echo $_POST['category'];

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
			$j = $this->User_Model->insert_skill($skills);
			if( $j == true)
			{
				redirect('user/interest', 'refresh');
			}
			else
			{
				show_404();
			}
			
		}
		redirect('user/skill');
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
	public function PostJob()
	{	

	$data_in['title'] = $this->input->post('title');
	$data_in['post_type'] = $this->input->post('TypeOfPost');
	$data_in['post_username'] = $this->session->userdata('username');
	$data_in['title_slug'] = urlencode($this->input->post('title'));
	$data_in['description'] = $this->input->post('description');
	$data_in['category'] = $this->input->post('category');
	$data_in['budget'] = $this->input->post('offer');
	$data_in['date_created'] = date('Y-m-d g:i');
	$data_in['creator'] = $this->session->userdata('email');
	$data_in['status'] = 0;
	$data_in['post_result'] = true;


	$result = $this->User_Model->insert_job_post($data_in);
	//  $msg['success'] = false;
	// if($insert)
	// {
	// 	//redirect('user/general/'.$this->session->userdata('email'), 'refresh');
	// 	$msg['success'] = true;
	// }
	echo json_encode($result);

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
	public function get_post()
	{
		$getData = $this->User_Model->get_user_post();
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
			redirect('user/thread','refresh');
		}
		else
		{
			echo "<script>alert('Sorry, cannot generate your request, please try later.')</script>";
			redirect('user/thread','refresh');
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
		$data_in['budget'] = $this->input->post('Ppricing');
		$data_in['date_created'] = date('Y-m-d g:i');
		$data_in['creator'] = $this->session->userdata('email');
		$data_in['status'] = 0;

		//$result = $this->User_Model->insert_project_post($data_in);
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
		 	echo "True";

		 }
		 else
		 {
		 	//If not owner, get id from the tbl,
		 	// get creator name,
		 	// from creator name, get the account information.
		 		

		 	//echo "Not Owner";
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
			// $result  = array(
			//  'proj' =>$this->User_Model->view_project($title_slug, $id),
			//  );	
		 // 	echo "<pre>";
		 // 	print_r($result);
		 // 	echo "</pre>";
		 }
		// if($result)
		// {

		// 	$get = $this->User_Model->get_important($this->session->userdata('email'));
		// 	$sess_data = array(
		// 		'id' => $get->account_id,
		// 		'email' =>$get->account_email,
		// 		'username' => $get->account_username,
		// 		'img' =>$get->account_img,
		// 	);
		// 	$data = array(
		// 		'proj' => $this->User_Model->view_project($title_slug, $id),
		// 	);	
		// 	$this->session->set_userdata($sess_data);
		// 	$this->load->view('freelance/template/header', $sess_data);
		// 	$this->load->view('freelance/new-profile-side');
		// 	$this->load->view('freelance/view_user_project',$data);
		// 	$this->load->view('freelance/template/footer');
		// }
		// else
		// {
		// 	echo "sorry";
		// }
	}


}// end of the controller


 ?>