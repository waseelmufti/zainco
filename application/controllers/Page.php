<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if(!$this->session->has_userdata('username')){
          redirect('usr/login');
        }
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('page/page_model', 'page_model');
    }
    
    public function index(){
        $this->load->helper('text');
        
        /*Configure Pagination*/
        $config = array();
        $config['base_url'] = site_url('admin/dashboard/page');
        
        $total_rows = $this->page_model->records_count('pages');
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
        
        $data['pages'] = $this->page_model->get_pages($config['per_page'], $page_off);
        $data['links'] = $this->pagination->create_links();  
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/page/index', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function show($id){
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/profile/dashboard');
        $this->load->view('admin/inc/footer');
    }
    
    public function edit($id){
        $data['page'] = $this->page_model->get_page($id);
        
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/page/edit', $data);
        $this->load->view('admin/inc/footer');
    }
    
    public function update(){
        print_r($this->input->post());
        $file_name = '';
        if($_FILES['image']['name']){
            
        $uploadPath = './uploads/images/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png';
        
        $this->load->library('upload', $config);
            
        if(!$this->upload->do_upload('image')){
            $msg = $this->upload->display_errors();
            $this->session->set_flashdata('error',$msg);
            redirect('admin/dashboard/page/edit/'.$this->input->post('id'));
        }else{
            $file_name = $this->upload->data('file_name');            
            }
        }else{
            $file_name = $this->input->post('old_img');
        }
        
        $slug = $this->input->post('slug') ? $this->input->post('slug') : url_title($this->input->post('title'));
        $page = $this->input->post();
        $page['slug'] = $slug;
        $page['image'] = $file_name;
        $page['id'] = $this->input->post('id');
        
        $flag = $this->page_model->update_page($page);
        
        if($flag){
              $this->session->set_flashdata('success', 'Page has been Updated successfully');
            }else{
              $this->session->set_flashdata('error', 'There is an error, Please try again');
            }
        
        redirect('admin/dashboard/page/');
        

    }
    
    public function add(){
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/page/add');
        $this->load->view('admin/inc/footer');
    }
    
    public function store(){
    
        $file_name = '';
        if($_FILES['image']['name']){
            
        $uploadPath = './uploads/images/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png';
        
        $this->load->library('upload', $config);
            
        if(!$this->upload->do_upload('image')){
            $msg = $this->upload->display_errors();
            $this->session->set_flashdata('error',$msg);
            redirect('admin/dashboard/page/add');
        }else{
            $file_name = $this->upload->data('file_name');            
            }
        }
        
        $slug = $this->input->post('slug') ? $this->input->post('slug') : url_title($this->input->post('title'));
        $page = $this->input->post();
        $page['slug'] = $slug;
        $page['image'] = $file_name;
        
        $flag = $this->page_model->save_page($page);
        
        if($flag){
              $this->session->set_flashdata('success', 'Page has been Save successfully');
            }else{
              $this->session->set_flashdata('error', 'There is an error, Please try again');
            }
        
        redirect('admin/dashboard/page/');
    }
   
    public function delete($id){
        $result = $this->page_model->delete_page($id);
            if($result){
            $this->session->set_flashdata('error', 'The Record is Deleted!');
        }
        redirect('admin/dashboard/page');
    }
}
