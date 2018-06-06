<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->model('car/car_model', 'car_model');
  }

  public function index(){
    $data = $this->car_model->get_car_img();
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/index', $data);
    $this->load->view('frontend/inc/footer');
  }

  public function showroom(){
    $data['cars'] = $this->car_model->get_list();
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
    
    public function enquiry($id){
    $car = $this->car_model->get_car($id);
    if(!$car){
        redirect('404');
    }
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/enquiry', $car);
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
    
}
