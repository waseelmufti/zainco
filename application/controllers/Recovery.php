<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recovery extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
          if(!$this->session->has_userdata('username')){
            redirect('usr/login');
          }
        $this->load->model('inquiry/recovery/recovery_model', 'recovery_model');
        $this->load->library('pagination');
    }
    
    public function index(){
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/recovery');
        
        $total_rows = $this->recovery_model->records_count('recovery_table', 'recovery');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        //$config['use_page_numbers'] = TRUE;
        $num_links = round($config['total_rows']/$config['per_page']);
        $config['num_links'] = $num_links;
        $config['uri_segment'] = 4;
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';  

        $this->pagination->initialize($config);
        $page_off = $this->uri->segment(4);
        
        $data['result'] = $this->recovery_model->get_list('recovery_table', $config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();
        
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/recovery/index', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function show($id){
        $this->recovery_model->update_read('recovery_table', $id);
            
        $data['result'] = $this->recovery_model->get_single('recovery_table', $id);
        
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/recovery/show', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function delete($id){
        $flag = $this->recovery_model->delete('recovery_table', $id);
    if($flag){
              $msg = 'Record is Deleted successfully.';
              $this->session->set_flashdata('error',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
    
    redirect('admin/dashboard/recovery');
    }
}