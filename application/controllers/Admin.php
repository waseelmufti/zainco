<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    if(!$this->session->has_userdata('username')){
      redirect('usr/login');
    }
      $this->load->library('form_validation');
      $this->load->model('auth/auth_model', 'auth_model');
  }

  public function index(){
    $this->load->view('admin/inc/header');
    $this->load->view('admin/inc/sidebar');
    $this->load->view('admin/profile/dashboard');
    $this->load->view('admin/inc/footer');
  }
    
    public function admin_profile($username){
        $result = $this->auth_model->get_user($username);
        if(!$result){
            redirect('404');
        }
    
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/profile/edit', $result);
        $this->load->view('admin/inc/footer');
    }
    public function update_profile(){
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() != FALSE){
            $flag = $this->auth_model->update_user($this->input->post());
            if($flag){
              $this->session->set_flashdata('success', 'Your Profile has been sent successfully');
            }else{
              $this->session->set_flashdata('error', 'There is an error, Please try again');
            }
          }
        
        redirect('admin');
    }
}