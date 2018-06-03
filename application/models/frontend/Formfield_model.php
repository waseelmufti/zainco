<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formfield_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function get_makeof(){
        $this->db->select('DISTINCT makeof');
    }
    
    public function get_models($makeof){
        
    }
    
    public function get_maxprice($model){
        
    }
    
    public function get_bodystyle($model){
        
    }
}