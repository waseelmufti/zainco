<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/index');
    $this->load->view('frontend/inc/footer');
  }

  public function showroom(){
    $this->load->view('frontend/inc/header');
    $this->load->view('frontend/showroom');
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


}
