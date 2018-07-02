<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partexc_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
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
    
    public function get_part($id, $form_type = 'general'){
        $this->db->where('id', $id);
        $this->db->where('form_type', $form_type);
        $query = $this->db->get('general_forms');
        $result['form'] = $query->result();
        
        if($result['form']){
            $this->db->where('form_id', $id);
            $this->db->where('form_type', $form_type);
            $query = $this->db->get('general_form_images');
            $result['images'] = $query->result();
            
            return $result;
        }
        return false;
        
    }
    
    public function get_quries($form_type = 'general', $limit = 5, $offset = 5){
        $this->db->where('form_type', $form_type);
        $result = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->get('general_forms');
        return $result->result();
    }
    
    public function delete_part($id, $form_type = 'general'){

            $this->db->trans_start();
    
            //delete Images
            $this->db->where('form_id', $id);
            $this->db->where('form_type', $form_type);
            $this->db->delete('general_form_images');
            //Delete Partexchange query
            $this->db->where('id', $id);
            $this->db->where('form_type', $form_type);
            $this->db->delete('general_forms');
            
            $this->db->trans_complete();
            
             if($this->db->trans_status() == FALSE){
                return FALSE;
             }
            
            return TRUE;
        }   
}