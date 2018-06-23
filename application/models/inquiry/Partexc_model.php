<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partexc_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
    }
    
    public function get_quries($form_type = 'general'){
     $result = $this->db->get('general_forms');
        return $result->result();
    }
    
}