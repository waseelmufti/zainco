<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model{
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
    
    public function get_list($table, $form_type = "", $limit = 5, $offset = 5){
        if($form_type){
            $this->db->where('form_type', $form_type);
        }
        $query = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->get($table);
         return $query->result();
    }
    
    public function get_single($table, $form_type = "", $id = NULL){
        if($form_type){
            $this->db->where('form_type', $form_type);
        }
        if($id){
            $this->db->where('id', $id);
        }
        
        $query = $this->db->get($table);
        $data['form_data'] = $query->result();
        $data['services'] = $this->get_services('car_services', $form_type, $id);
        return $data;
        
    }
    
    public function get_services($table, $form_type, $car_ser_id){
        if($form_type){
            $this->db->where('form_type', $form_type);
        }
        if($car_ser_id){
            $this->db->where('car_ser_id', $car_ser_id);
        }
        
        $query = $this->db->get($table);
        return $query->result();
    }
    
    public function delete($table, $form_type, $id){
        $this->db->trans_start();
    
            //delete services from services table
            $this->db->where('car_ser_id', $id);
            $this->db->where('form_type', $form_type);
            $this->db->delete('car_services');
            //Delete service contact information
            $this->db->where('id', $id);
            $this->db->where('form_type', $form_type);
            $this->db->delete($table);
            
            $this->db->trans_complete();
            
             if($this->db->trans_status() == FALSE){
                return FALSE;
             }
            
            return TRUE;
        }
    }