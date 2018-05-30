<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inquiry extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
  if(!$this->session->has_userdata('username')){
    redirect('usr/login');
  }
        
        $this->load->library('pagination');
        $this->load->model('inquiry/inquiry_model', 'inquiry_model');
    }
    
    public function contact(){
        $this->load->view('admin/inc/header');
  $this->load->view('admin/inc/sidebar');
  $this->load->view('admin/inquiry/contact_list');
  $this->load->view('admin/inc/footer');
    }
}
