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
        $this->load->model('page/page_model', 'page_model');
    }
    
    public function index(){
        $this->load->helper('text');
        $data['pages'] = $this->page_model->get_pages();
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
