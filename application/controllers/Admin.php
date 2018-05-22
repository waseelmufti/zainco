<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    if(!$this->session->has_userdata('username')){
      redirect('usr/login');
    }
  }

  public function index(){
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/inc/blank');
    $this->load->view('admin/inc/footer');
  }
}
