<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model{

	public function __construct(){
		parent::__construct();	
		
	}
	public function get_msg($email)
	{
		if(!empty($email))
		{
			$this->db->where('msg_sender' , $email);
			$sql = $this->db->get('message_destination_tbl');
			return $sql->result();
			if(!empty($sql) && $sql->num_rows() > 0)
			{
				return true;
				echo "YES";
			}
			else
			{
				return false;
				echo "Nope";
			}
		}
	}
	public function get_msg_info($email)
	{
		if(!empty($email))
		{
			$this->db->where('msg_author' , $email);
			$sql = $this->db->get('message_info_tbl');
			return $sql->result();
			if(!empty($sql) && $sql->num_rows() > 0)
			{
				return true;
				echo "YES";
			}
			else
			{
				return false;
				echo "Nope";
			}
		}
	}


	public function send_msg($sendMsg)
	{	
		if(!empty($sendMsg))
		{
			$this->db->insert('message_destination_tbl',$sendMsg);
			if ($this->db->affected_rows()==1)
			{
				return true;
			}
			else
			{
				echo "<pre>";
				print_r($sendMsg);
				echo "</pre>";
				return false;
			}

		}

	}
	public function msg_info($msgInfo)
	{
		if(!empty($msgInfo))
		{
			$this->db->insert('message_info_tbl',$msgInfo);
			if ($this->db->affected_rows()==1)
			{
				return true;
			}
			else
			{
				echo "<pre>";
				print_r($msgInfo);
				echo "</pre>";
				return false;
			}

		}
	}





 }
 ?>