<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
  }
  public function login(){
    if($this->session->has_userdata('username')){
      redirect('admin');
    }
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

    if($this->form_validation->run() != false){
        $this->load->model('auth/auth_model', 'auth');

        $result = $this->auth->verify_user($this->input->post('username'), $this->input->post('password'));
        if( $result !== false){
          $this->session->username = $this->input->post('username');
          redirect('admin/dashboard');
        }else{
         $this->session->set_flashdata('error', 'Username, Email or Password is Incorrect! <br> Please Enter Valid Information');   
        }
    }
    $this->load->view('auth/login');
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->load->view('auth/login');
  }
}
