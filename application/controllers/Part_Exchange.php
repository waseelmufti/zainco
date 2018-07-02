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
        $this->load->library('pagination');
    }
    
    public function index(){
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/part-exchange');        
        $total_rows = $this->part_model->records_count('general_forms','partexchange');
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
        
        $data['results'] = $this->part_model->get_quries('partexchange', $config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/exchange_part/index', $data);
        $this->load->view('admin/inc/footer');
    }
    public function show($id){
        $this->part_model->update_read('general_forms', $id);
        $result = $this->part_model->get_part($id, 'partexchange');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/exchange_part/show', $result);
        $this->load->view('admin/inc/footer');
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
    
    redirect('admin/dashboard/part-exchange'); 
    }
}
