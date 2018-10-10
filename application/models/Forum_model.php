<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class Forum_model extends CI_MODEL{
	public function __construct(){
		parent:: __construct();
		
	}

	public function view_forum($title_slug, $id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('freelance_forum_tbl');
		if($query->num_rows() >0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function get_forum_topics($id)
	{
		$this->db->select('*');
		$this->db->where('forum_id', $id);
		$this->db->from('forum_topics_tbl');
		//$this->db->join('freelance_forum_tbl', 'forum_topics_tbl.forum_id = freelance_forum_tbl.id');

		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function get_forum_topic_id($id)
	{
		$this->db->select('topic_id');
		$this->db->where('forum_id', $id);
		$data = $this->db->get('forum_topics_tbl');
		if($data->num_rows() > 0 )
		{
			return $data->result();
		}
		else
		{
			return false;
		}
	}
	public function get_forum_topic_posts($id)
	{
		$this->db->select('*');
		$this->db->where('topic_id', $id);
		$data =$this->db->get('forum_posts_tbl');
		if($data->num_rows() > 0 )
		{
			return $data->result();
		}
		else
		{
			return false;
		}
	}
	public function get_forum_title($id)
	{
		$this->db->select('forum_topic');
		$this->db->where('id', $id);
		$data = $this->db->get('freelance_forum_tbl');
		if($data->result_array() > 0 )
		{
			return $data->row();
		}
		else
		{
			return false;
		}
	}
	public function get_topic_title($id)
	{
		$this->db->select('title');
		$this->db->where('topic_id', $id);
		$data = $this->db->get('forum_topics_tbl');
		if($data->result_array() > 0 )
		{
			return $data->row();
		}
		else
		{
			return false;
		}
	}
	public function count_topics()
	{
		//$va = 'Video and Animation';
		//$this->db->select('*');
		$id = $this->input->get('id');
		$this->db->where('forum_id', $id );
		$query = $this->db->get('forum_topics_tbl');
		if($query->num_rows() > 0)
		{
			return $query->num_rows();		
		}
		else
		{
			return false;
		}
	}
	public function count_posts()
	{
		//$va = 'Video and Animation';
		//$this->db->select('*');
		// $id = $this->input->get('id');
		// $this->db->where('forum_id', $id );
		// $query = $this->db->get('forum_topics_tbl');
		// if($query->num_rows() > 0)
		// {
		// 	return $query->num_rows();		
		// }
		// else
		// {
		// 	return false;
		// }
	}

}
?>