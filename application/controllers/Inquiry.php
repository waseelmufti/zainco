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
    
    /* Contact Form Methods*/
    public function contact(){
        $data['contacts'] = $this->inquiry_model->get_contact();
        $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/inquiry/contact_list', $data);
          $this->load->view('admin/inc/footer');
    }
    
    public function contact_show($id){
        $this->inquiry_model->update_read('contact_form', $id);
        $data['contact'] = $this->inquiry_model->contact_content($id);
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/single_contact', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function contact_delete($id){
        $result = $this->inquiry_model->inquiry_delete('contact_form', $id);
        if($result){
            $this->session->set_flashdata('error', 'The Record is Deleted!');
        }
        redirect('admin/dashboard/contact');
    }
    
    /* Sell Car Form Methods*/
    public function sellcar(){
        $data['sellcars'] = $this->inquiry_model->get_sellcar();
        $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/inquiry/sellcar_list', $data);
          $this->load->view('admin/inc/footer');
    }
    
    public function sellcar_show($id){
        $this->inquiry_model->update_read('car_valuation', $id);
        $data['sellcar'] = $this->inquiry_model->sellcar_content($id);
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/single_sellcar', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function sellcar_delete($id){
        $result = $this->inquiry_model->inquiry_delete('car_valuation', $id);
        if($result){
            $this->session->set_flashdata('error', 'The Record is Deleted!');
        }
        redirect('admin/dashboard/sell-car');
    }
}
