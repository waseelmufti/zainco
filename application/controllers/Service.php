<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
          if(!$this->session->has_userdata('username')){
            redirect('usr/login');
          }
        $this->load->model('services/service_model', 'service_model');
    }
    
    public function index(){
        $page = $this->uri->segment(3);
        $form_type = '';
        if($page == 'services'){
            $form_type = 'servicing';
        }elseif($page == 'vehicle-health'){
            $form_type = 'vehiclehealth';
        }elseif($page == 'car-dignose'){
            $form_type = 'cardignose';
        }    
        $data['result'] = $this->service_model->get_list('car_service_form', $form_type);
        $data['page'] = $page;
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/service/index', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function show($id){
        $this->service_model->update_read('car_service_form', $id);
        $page = $this->uri->segment(3);
        $form_type = '';
        if($page == 'services'){
            $form_type = 'servicing';
        }elseif($page == 'vehicle-health'){
            $form_type = 'vehiclehealth';
        }elseif($page == 'car-dignose'){
            $form_type = 'cardignose';
        }    
        $data['result'] = $this->service_model->get_single('car_service_form', $form_type, $id);
        $data['page'] = $page;
        
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/service/show', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function delete($id){
        $page = $this->uri->segment(3);
        $form_type = '';
        if($page == 'services'){
            $form_type = 'servicing';
        }elseif($page == 'vehicle-health'){
            $form_type = 'vehiclehealth';
        }elseif($page == 'car-dignose'){
            $form_type = 'cardignose';
        }    
    
    $flag = $this->service_model->delete('car_service_form',$form_type, $id);
    $data['page'] = $page;
    if($flag){
              $msg = 'Record is Deleted successfully.';
              $this->session->set_flashdata('error',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
    
    redirect('admin/dashboard/'.$page); 
    }
}
