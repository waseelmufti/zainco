<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry_model extends CI_Model{
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
    
    public function inquiry_delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }
    
    /* Contact form models */
    public function get_contact($limit = 5, $offset = 5){
        $contact = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->get('contact_form');
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
    
    public function get_enquiries($form_type, $limit = 5, $offset = 5){
        $result = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->where('form_type', $form_type)->get('enquiry');
        return $result->result();
    }
    
    public function get_enquiry($id, $form){
        $result = $this->db->where('id', $id)
                            ->where('form_type', $form)->get('enquiry');
        return $result->result();
    }
    public function delete_enquiry($id, $form){
        $this->db->where('id', $id)
            ->where('form_type', $form);
        return $this->db->delete('enquiry');
    }
    
}
