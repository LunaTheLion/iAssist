<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Search_Model');
		
	}

	public function order_project($slug)
	{
		$id = substr($slug, -2);
		
		$post = $this->Search_Model->get_email($id);
		// print_r($post);
		$email = $post->project_publisher;
		
		$view = array (
			'view' 			=>	$this->Search_Model->get_post($id),
			'publisher' 	=>	$this->Search_Model->get_owner($email), 
			'proj'			=>  $this->Search_Model->get_more_proj($email),
		);


		$this->load->view('freelance/header');
		$this->load->view('freelance/project-order', $view);
		$this->load->view('freelance/footer');	
	}
	public function payment()
	{		
		$this->load->view('freelance/header');
		$this->load->view('freelance/payment');
		$this->load->view('freelance/footer');
	}
	public function thread()
	{
		$job_posts = array( 
		'jobs' => $this->Search_Model->get_jobs(),
		);
		// echo "<pre>";
		// print_r($job_posts);
		// echo "</pre>";
		$this->load->view('guest/template/header');
		$this->load->view('guest/thread-guest-side-nav');
		$this->load->view('guest/thread', $job_posts);
		$this->load->view('guest/template/footer');
	}
		public function Search_Job_Criteria()
		{
			$data1 = $this->input->post('category');
			$data2 = $this->input->post('budget');
			$data3 = $this->input->post('searchInput');
			$result = $this->Search_Model->search_job_criteria();
			if( empty($data1) && empty($data2) && empty($data3))
			{
				echo "<script>alert('Sorry! No match found.')</script>";
				echo "<script>
	    				window.history.back();
					</script>";
			}
			else if($result)
			{	
				
				$job_posts = array( 
					'jobs' => $this->Search_Model->search_job_criteria(),
				);
				// echo"<pre>";print_r($job_posts);echo"</pre>";
				
				$this->load->view('guest/template/header');
				$this->load->view('guest/thread-guest-side-nav');
				$this->load->view('guest/thread',$job_posts);
				$this->load->view('guest/template/footer');
			}
			else
			{
				echo "<script>alert('Sorry! No match found.')</script>";
				echo "<script>
	    				window.history.back();
					</script>";
				
			}
		}
		public function Search_skill_Criteria()
		{
			$data1 = $this->input->post('category');
			$data2 = $this->input->post('budget');
			$data3 = $this->input->post('searchInput');
			$result = $this->Search_Model->search_skill_criteria();
			if( empty($data1) && empty($data2) && empty($data3))
			{
				echo "<script>alert('Sorry! No match found.')</script>";
				echo "<script>
	    				window.history.back();
					</script>";
			}
			else if($result)
			{	
				
				$job_posts = array( 
					'jobs' => $this->Search_Model->search_skill_criteria(),
				);
				// echo"<pre>";print_r($job_posts);echo"</pre>";
				
				$this->load->view('guest/template/header');
				$this->load->view('guest/job-guest-side-nav');
				$this->load->view('guest/thread',$job_posts);
				$this->load->view('guest/template/footer');
			}
			else
			{
				echo "<script>alert('Sorry! No match found.')</script>";
				echo "<script>
	    				window.history.back();
					</script>";
				
			}
		}
			public function Search_request_Criteria()
			{
				$data1 = $this->input->post('category');
				$data2 = $this->input->post('budget');
				$data3 = $this->input->post('searchInput');
				$result = $this->Search_Model->search_request_criteria();
				if( empty($data1) && empty($data2) && empty($data3))
				{
				echo "<script>alert('Sorry! No match found.')</script>";
				echo "<script>
	    				window.history.back();
					</script>";
				}
				else if($result)
				{	
					
					$job_posts = array( 
						'jobs' => $this->Search_Model->search_request_criteria(),
					);
					// echo"<pre>";print_r($job_posts);echo"</pre>";
					
					$this->load->view('guest/template/header');
					$this->load->view('guest/job-guest-side-nav');
					$this->load->view('guest/thread',$job_posts);
					$this->load->view('guest/template/footer');
				}
				else
				{
					echo "<script>alert('Sorry! No match found.')</script>";
					echo "<script>
		    				window.history.back();
						</script>";
					
				}
			}
	public function find()
	{
			$job_posts = array( 
			'jobs' => $this->Search_Model->search(),
			);
			
			if($this->Search_Model->search())
			{
				$this->load->view('guest/template/header');
				$this->load->view('guest/thread-guest-side-nav');
				$this->load->view('guest/thread', $job_posts);
				$this->load->view('guest/template/footer');
			}
			else
			{
				echo "<script>alert('Sorry No match Found')</script>";
				echo "<script>window.history.back();</script>";
			}
			
	}
	public function Skill()
	{
		$job_posts = array( 
		'jobs' => $this->Search_Model->get_skill(),
		);
		$this->load->view('guest/template/header');
		$this->load->view('guest/skill-guest-side-nav');
		$this->load->view('guest/skill', $job_posts);
		$this->load->view('guest/template/footer');
	}
	public function Request()
	{
		$job_posts = array( 
		'jobs' => $this->Search_Model->get_requests(),
		);
		$this->load->view('guest/template/header');
		$this->load->view('guest/request-guest-side-nav');
		$this->load->view('guest/request', $job_posts);
		$this->load->view('guest/template/footer');
	}
public function ViewProject($title_slug,$id)
	{
		 	//echo "Not Owner";
		 	$ow = $this->Search_Model->get_project_owner($id);	

		 	if($ow)
		 	{	
		 		//echo " True Creator<br>";
		 		$email = $ow->creator;
		 		$data = $this->Search_Model->get_account_info($email);

		 			
		 			$data = array(
		 				'proj' => $this->Search_Model->view_project($title_slug, $id),
		 			);	
		 			$true = array(
		 				'owner' =>$this->Search_Model->get_account_info($email),
		 			);
		 			// echo "<pre>";
		 			// print_r($true);
		 			// echo "</pre>";
		 			$this->load->view('guest/template/header');
		 			$this->load->view('guest/true_project_owner', $true);
		 			$this->load->view('guest/view_user_project',$data);
		 			$this->load->view('guest/template/footer');
		 	}
		 	else
		 	{
		 		echo "No creator";
		 	}
		 
	}
	public function ViewJob($title_slug,$id)
		{
			 	//echo "Not Owner";
			 	$ow = $this->Search_Model->get_job_owner($id);	

			 	if($ow)
			 	{	
			 		//echo " True Creator<br>";
			 		$email = $ow->creator;
			 		$data = $this->Search_Model->get_account_info($email);

			 			
			 			$data = array(
			 				'proj' => $this->Search_Model->view_job($title_slug, $id),
			 			);	
			 			$true = array(
			 				'owner' =>$this->Search_Model->get_account_info($email),
			 			);
			 			// echo "<pre>";
			 			// print_r($true);
			 			// echo "</pre>";
			 			$this->load->view('guest/template/header');
			 			$this->load->view('guest/true_project_owner', $true);
			 			$this->load->view('guest/view_user_project',$data);
			 			$this->load->view('guest/template/footer');
			 	}
			 	else
			 	{
			 		echo "No creator";
			 	}
			 
		}
	public function request_service()
	{

	
		$request = array(
				'request'=> $this->session->userdata('request'),
				'request-category' => $this->session->userdata('request-category'),
				'request-subcategory' => $this->session->userdata('request-subcategory'),
				'request-delivery' => $this->session->userdata('request-delivery'),
				'request-amount' => $this->session->userdata('request-amount'),
			);
			$this->session->set_userdata($request);

		$this->load->view('freelance/header', $request);
		$this->load->view('freelance/project-request');
		$this->load->view('freelance/footer');






	}
	public function validate_request_service()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('find', 'Description', 'required');
		// $this->form_validation->set_rules('category', 'Givename', 'required');
		//$this->form_validation->set_rules('subcategory', 'Username', 'required');
		// $this->form_validation->set_rules('time', 'Request Deliveryr', 'required');
		// $this->form_validation->set_rules('amount', 'Request Amount', 'required');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		$cat = $this->input->post('category');
		$ci = "";
		if($cat == "VAA")
		{
			$ci = "Video & Animation";
		}
		elseif($cat == "GAD")
		{
			$ci = "Graphics & Design";
		}
		elseif($cat == "DM")
		{
			$ci = "Digital Marketing";
		}
		elseif($cat == "WAT")
		{
			$ci = "Writing & Translation";
		}
		elseif($cat == "MAA")
		{
			$ci = "Music & Audio";
		}
		elseif($cat == "PAT")
		{
			$ci = "Programming & Tech";
		}
		elseif($cat == "BUS")
		{
			$ci = "Business";
		}
		elseif($cat == "FAL")
		{
			$ci = "Fun & Lifestyle";
		}



		$this->session->set_userdata('request', $this->input->post('find'));
		$this->session->set_userdata('request-category', $ci);
		$this->session->set_userdata('request-subcategory', $this->input->post('sub-category'));
		$this->session->set_userdata('request-delivery', $this->input->post('time'));
		$this->session->set_userdata('request-amount', $this->input->post('amount'));

		if($this->form_validation->run())
		{
			$request = array(
				'request'=> $this->session->userdata('request'),
				'request-category' => $this->session->userdata('request-category'),
				'request-subcategory' => $this->session->userdata('request-subcategory'),
				'request-delivery' => $this->session->userdata('request-delivery'),
				'request-amount' => $this->session->userdata('request-amount'),
			);
			$this->session->set_userdata($request);
			$this->load->view('freelance/header', $request);
			$this->load->view('freelance/project-request-success');
			$this->load->view('freelance/footer');
			// echo $this->input->post('subcategory');
		}
		else
		{
			// $this->session->set_flashdata('error','wht');	
			redirect(base_url('search/request_service'));
		}

		
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