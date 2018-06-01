<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
    }
    
    public function update_read($table, $id){
        $this->db->set('active', 1);
        $this->db->where('id', $id);
        $this->db->update($table);
    }
    
    public function inquiry_delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }
    
    /* Contact form models */
    public function get_contact(){
        $contact = $this->db->order_by('created_at', 'DESC')->get('contact_form');
        return $contact->result();
    }
    
    public function contact_content($id){
        $result = $this->db->where('id', $id)->get('contact_form');
        return $result->result();
    }
    
    /* Contact form models */
    public function get_sellcar(){
        $contact = $this->db->order_by('created_at', 'DESC')->get('car_valuation');
        return $contact->result();
    }
    
    public function sellcar_content($id){
        $result = $this->db->where('id', $id)->get('car_valuation');
        return $result->result();
    }
    
}
