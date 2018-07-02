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
        $this->load->model('inquiry/partexc_model', 'part_model');
    }
    
    /* Contact Form Methods*/
    public function contact(){
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/contact');
        
        $total_rows = $this->inquiry_model->records_count('contact_form');
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
        
        $data['contacts'] = $this->inquiry_model->get_contact($config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();  
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
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/sell-car');
        
        $total_rows = $this->part_model->records_count('general_forms', 'sellcar');
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
        
        $data['results'] = $this->part_model->get_quries('sellcar', $config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();  
        
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/sellcar_list', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function sellcar_show($id){
        $this->inquiry_model->update_read('general_forms', $id);
        $result = $this->part_model->get_part($id, 'sellcar');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inquiry/single_sellcar', $result);
        $this->load->view('admin/inc/footer');
    }
    
    public function sellcar_delete($id){
        $result = $this->part_model->delete_part($id, $form_type = 'sellcar');
        if($result){
            $this->session->set_flashdata('error', 'The Record is Deleted!');
        }
        redirect('admin/dashboard/sell-car');
    }
    
    public function enquiry(){
        $page = $this->uri->segment(3);
        $form_type = '';
        switch($page){
                case 'reserve-car'; 
                $form_type = 'reserve';
                break;
                case 'test-drive'; 
                $form_type = 'testdrive';
                break;
                case 'send-offer'; 
                $form_type = 'sendoffer';
                break;
                case 'enquiry'; 
                $form_type = 'enquiry';
                break;
                default: $form_type = 'reserve';
        }
        
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/test-drive');
        
        $total_rows = $this->part_model->records_count('enquiry', $form_type);
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
        
        $data['enquiries'] = $this->inquiry_model->get_enquiries($form_type, $config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();
        $data['form_type'] = $page;
        $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/inquiry/enquiry', $data);
          $this->load->view('admin/inc/footer');
    }
    
    public function enquiry_show($id){
        $page = $this->uri->segment(3);
        $form_type = '';
        switch($page){
                case 'reserve-car'; 
                $form_type = 'reserve';
                break;
                case 'test-drive'; 
                $form_type = 'testdrive';
                break;
                case 'enquiry'; 
                $form_type = 'enquiry';
                break;
                case 'send-offer'; 
                $form_type = 'sendoffer';
                break;
                default: $form_type = 'reserve';
        }
        
        $data['enquiry'] = $this->inquiry_model->get_enquiry($id, $form_type);
        $data['form_type'] = $page;
        if($data['enquiry']){
        $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/inquiry/enquiry_show', $data);
          $this->load->view('admin/inc/footer');
            }else{
            redirect('404');
        }
    }
    
    public function enquiry_delete($id){
        $page = $this->uri->segment(3);
        $form_type = '';
        switch($page){
                case 'reserve-car'; 
                $form_type = 'reserve';
                break;
                case 'test-drive'; 
                $form_type = 'testdrive';
                break;
                case 'enquiry'; 
                $form_type = 'enquiry';
                break;
                case 'send-offer'; 
                $form_type = 'sendoffer';
                break;
                default: $form_type = 'reserve';
        }
        
        $result = $this->inquiry_model->delete_enquiry($id, $form_type);
        if($result){
            $this->session->set_flashdata('error', 'The Record is Deleted!');
        }
        redirect('admin/dashboard/'.$page);
    }
}
