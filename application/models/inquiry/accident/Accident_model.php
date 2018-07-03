<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Accident_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function records_count($table, $form_type = NULL){
        if($form_type){
            $this->db->where('form_type', $form_type);
        }
        return $this->db->count_all_results($table);
    }
    
    public function update_read($table, $id){
        $this->db->set('active', 1);
        $this->db->where('id', $id);
        $this->db->update($table);
    }
    
    public function save_record($data){
        $flag = $this->db->insert('accident_table', $data);
        return $flag;
    }
    
    public function get_list($table, $limit = 5, $offset = 5){

        $query = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->get($table);
         return $query->result();
    }
    
    public function get_single($table, $id){
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query->result();
    }
    
    public function delete($table, $id){

            $this->db->where('id', $id);
            return $this->db->delete($table);
            
        }
}