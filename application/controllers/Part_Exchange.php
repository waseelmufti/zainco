<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Part_exchange extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
          if(!$this->session->has_userdata('username')){
            redirect('usr/login');
          }
        $this->load->model('inquiry/partexc_model', 'part_model');
    }
    
    public function index(){
        $data['results'] = $this->part_model->get_quries('partexchange');
        print_r($data);
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/exchange_part/index', $data);
        $this->load->view('admin/inc/footer');
    }
    public function show($id){
        
    }
    public function delete($id){
       $flag = $this->part_model->delete_part($id, 'partexchange');
    if($flag){
              $msg = 'Record is Deleted successfully.';
              $this->session->set_flashdata('error',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
    
    redirect('admin/dashboard/car'); 
    }
}
