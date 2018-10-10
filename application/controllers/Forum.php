<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class Forum extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Forum_Model');
		$this->load->model('User_Model');
	}

	public function ViewForum($title_slug, $id)
	{	
		$forum = $this->Forum_Model->view_forum($title_slug, $id);
		$topic = $this->Forum_Model->get_forum_topics($id);
		$get_forum_title = $this->Forum_Model->get_forum_title($id);
		$ftitle = $get_forum_title->forum_topic;
		//echo $ftitle;

		if($this->Forum_Model->view_forum($title_slug, $id))
		{
			$get = $this->User_Model->get_important($this->session->userdata('email'));
			$sess_data = array(
				'id' => $get->account_id,
				'email' =>$get->account_email,
				'username' => $get->account_username,
				'img' =>$get->account_img,
			);
			$job_posts = array( 
				'jobs' => $this->Forum_Model->get_forum_topics($id),
			);
			//echo"<pre>";print_r($job_posts);echo"</pre>";
			$this->session->set_userdata('forum_topic', $ftitle);
			$this->session->set_userdata('forum_topic_slug', $title_slug);
			$this->session->set_userdata('forum_topic_id', $id);

			$this->session->set_userdata($sess_data);
			$this->load->view('freelance/template/header', $sess_data);
			$this->load->view('freelance/forum/side-user-forum');
			$this->load->view('freelance/forum/view_forum',$job_posts);
			$this->load->view('freelance/template/footer');
		}

	}
	public function ViewTopic($title_slug, $id)
	{	

		$posts = $this->Forum_Model->get_forum_topic_posts($id);
		$get_topic_title = $this->Forum_Model->get_topic_title($id);
		$ttitle = $get_topic_title->title;

		$get = $this->User_Model->get_important($this->session->userdata('email'));
		$sess_data = array(
			'id' => $get->account_id,
			'email' =>$get->account_email,
			'username' => $get->account_username,
			'img' =>$get->account_img,
		);
		$job_posts = array( 
			'jobs' =>  $this->Forum_Model->get_forum_topic_posts($id),
		);
		// //echo"<pre>";print_r($job_posts);echo"</pre>";
		// //$this->session->set_userdata('forum_topic', $ftitle);
		// $this->session->set_userdata('forum_topic_slug', $title_slug);
		// $this->session->set_userdata('forum_topic_id', $id);
		$this->session->set_userdata('topic' , $ttitle);
		$this->session->set_userdata('topic_slug' , $title_slug);
		$this->session->set_userdata('topic_id' , $id);
		$this->session->set_userdata($sess_data);
		$this->load->view('freelance/template/header', $sess_data);
		$this->load->view('freelance/forum/side-user-forum');
		$this->load->view('freelance/forum/view_topic',$job_posts);
		$this->load->view('freelance/template/footer');
	}
	public function countTopics()
	{
		//$data_in= $this->input->get('id');
		$count = $this->Forum_Model->count_topics();
		echo json_encode($count);
	}
	public function countPosts()
	{
		//$data_in= $this->input->get('id');
		$count = $this->Forum_Model->count_posts();
		echo json_encode($count);
	}
	public function CreateTopic()
	{
		
		$id = $this->input->post('forum_id');
		if($this->Forum_Model->insert_topic($id))
		{
			echo "<script>alert('Topic Saved')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
		else
		{
			echo "<script>alert('Sorry, Cannot save your post')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
	}
	public function CreatePost()
	{
		$id = $this->input->post('topic_id');
		// echo $this->input->post('content');	
		// echo $id;
		//$this->Forum_Model->insert_post($id);
		if($this->Forum_Model->insert_post($id))
		{
			echo "<script>alert('Post Saved')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
		else
		{
			echo "<script>alert('Sorry, Cannot save your post')</script>";
			echo "<script>
    				window.history.back();
				</script>";
		}
	}

}
?>