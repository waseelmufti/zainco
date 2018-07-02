<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formfield_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function records_count($table){
        return $this->db->count_all($table);
    }
    
    public function get_bodystyle(){
        $this->db->select('body_style');
        $this->db->distinct();
        $result = $this->db->get('car_table');
        return $result->result();
        
    }
    
    public function get_gearbox(){
        $this->db->select('gearbox');
        $this->db->distinct();
        $result = $this->db->get('car_table');
        return $result->result();
    }
    
    public function get_fueltype(){
        
    }
}