<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model{
    function __construct() {
        $this->proTable = 'freelance_project_tbl';
        $this->transTable = 'payments';
    }
    
    // Fetch and return product data
    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from($this->proTable);
        $this->db->where('status', '1');
        
        if($id){
            $this->db->where('post_id', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('date_allowed_by_admin');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    // Insert transaction data
    public function insertTransaction($data = array()){
        $insert = $this->db->insert($this->transTable,$data);
        return $insert?true:false;
    }
}