<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function records_count($table){
        
        return $this->db->count_all($table);
    }
    
    public function get_pages($limit = 5, $offset = 5){
        $result = $this->db->limit($limit, $offset)->order_by('created_at', 'DESC')->get('pages');
        return $result->result();
    }
    
    public function get_page($id){
        $result = $this->db->where('id', $id)->get('pages');
        return $result->result();
        
    }
    
    public function get_front_page($slug){
        $result = $this->db->where('slug', $slug)->get('pages');
        return $result->result();
        
    }
    
    public function save_page($page){
        
        $data = array(
        'title' => $page['title'],
        'slug' => $page['slug'],
        'content' => $page['content'],
        'image' => $page['image'],
        );
        
        $flag = $this->db->insert('pages', $data);
        return $flag;
    }
    
    public function update_page($page){
        $data = array(
        'title' => $page['title'],
        'slug' => $page['slug'],
        'content' => $page['content'],
        'image' => $page['image'],
        );
        
        $this->db->where('id', $page['id']);
        $flag = $this->db->update('pages', $data);
        return $flag;
    }
    
    public function delete_page($id){
        $this->db->where('id', $id);
        return $this->db->delete('pages');
    }
}