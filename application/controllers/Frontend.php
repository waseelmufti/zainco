<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('car/car_model', 'car_model');
      $this->load->library('pagination');
  }

  public function index(){
    $data = $this->car_model->get_car_img();
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/index', $data);
    $this->load->view('frontend/inc/footer');
  }

  public function showroom(){
    $this->load->model('frontend/formfield_model', 'fields_model');
    
    /*Configure Pagination*/
    $config = array();
    $config['base_url'] = site_url('showroom');

    $total_rows = $this->car_model->records_count('car_table');
    $config['total_rows'] = $total_rows;
    $config['per_page'] = 2;
    //$config['use_page_numbers'] = TRUE;
    $num_links = round($config['total_rows']/$config['per_page']);
    $config['num_links'] = $num_links;
    $config['uri_segment'] = 2;
    $config['full_tag_open'] = '<ol class="pagenavi">';
    $config['full_tag_close'] = '</ol>';
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&raquo;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li><a href="" class="active">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';  

    $this->pagination->initialize($config);
    $page_off = $this->uri->segment(2); 
      
    $data['cars'] = $this->car_model->get_list($config['per_page'], $page_off);
    $c = count($data['cars']);
    $data['links'] = $this->pagination->create_links();
    $data['start_data'] = $page_off+1;  
    $data['end_data'] = $page_off+$c;  
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/showroom', $data);
    $this->load->view('frontend/inc/footer');
  }

public function showcar($id){
  $data = $this->car_model->get_car($id);
  $this->load->view('frontend/inc/header');
  $this->load->view('frontend/singlecar', $data);
  $this->load->view('frontend/inc/footer');
}
  public function sellCar(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/sellcar');
    $this->load->view('frontend/inc/footer');
  }

  public function carLocator(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/carlocator');
    $this->load->view('frontend/inc/footer');
  }

  public function services(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/services');
    $this->load->view('frontend/inc/footer');
  }
    
  public function vehicle_health(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/vehicle_health');
    $this->load->view('frontend/inc/footer');      
    }
    
    public function car_dignose(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/car_dignose');
    $this->load->view('frontend/inc/footer');      
    }
  public function aboutUs(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/about');
    $this->load->view('frontend/inc/footer');
  }

  public function testimonials(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/testimonials');
    $this->load->view('frontend/inc/footer');
  }

  public function contact(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/contact');
    $this->load->view('frontend/inc/footer');
  }
    public function thankyou(){
    
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/thankyou');
    $this->load->view('frontend/inc/footer');
}
    
public function buy_now($id){
    $car = $this->car_model->get_car($id);
    if(!$car){
        redirect('404');
    }
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/buynow', $car);
    $this->load->view('frontend/inc/footer');
}

    public function book_test_drive($id){
    $car = $this->car_model->get_car($id);
    if(!$car){
        redirect('404');
    }
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/testdrive', $car);
    $this->load->view('frontend/inc/footer');
}
    
    public function send_offer($id){
        $car = $this->car_model->get_car($id);
    if(!$car){
        redirect('404');
    }
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/send_offer', $car);
    $this->load->view('frontend/inc/footer');
    }
    
    public function enquiry($id){
    $car = $this->car_model->get_car($id);
    if(!$car){
        redirect('404');
    }
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/enquiry', $car);
    $this->load->view('frontend/inc/footer');
}
    
    public function part_exchange(){
        $cars = $this->car_model->get_distinct_car_model();
        $data = array(
        'cars' => $cars,
        );
    
        $this->load->view('frontend/inc/header');
        $this->load->view('frontend/part_exchange', $data);
        $this->load->view('frontend/inc/footer');
    }

    public function get_direction(){
        $this->load->view('frontend/inc/header');
        $this->load->view('frontend/get_direction');
        $this->load->view('frontend/inc/footer');
        
    }
public function page(){
    $slug = $this->uri->segment(1) ;
    $this->load->model('page/page_model', 'page_model');
    $data['page'] = $this->page_model->get_front_page($slug);
    
    if(!$data['page']){
         //redirect('/');   
    }
     $this->load->view('frontend/inc/header');
    $this->load->view('frontend/single', $data);
    $this->load->view('frontend/inc/footer');
}
    public function accident_claims(){
        $data = array();
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/accident_claim', $data);
    $this->load->view('frontend/inc/footer');
    }
    
}
