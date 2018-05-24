<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('forms/form_model', 'form_model');
  }

  public function contact(){

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('message', 'Message', 'required');

    if($this->form_validation->run() != FALSE){
        $flag = $this->form_model->saveContact($this->input->post());
        if($flag){
          $this->session->set_flashdata('success', 'Your Message has been sent successfully');
        }else{
          $this->session->set_flashdata('error', 'There is an error, Please try again');
        }
      }else{
        $err = validation_errors('<div style="color: #fff;">', '</div>');
        $this->session->set_flashdata('error', $err);
      }
        redirect('contact');
        }

  public function sellCar(){
    $this->form_validation->set_rules('registration', 'Registration', 'required');
    $this->form_validation->set_rules('make', 'Make of Car', 'required');
    $this->form_validation->set_rules('model', 'Model', 'required');
    $this->form_validation->set_rules('year', 'Year', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone', 'required');

    if($this->form_validation->run() != FALSE){
        $flag = $this->form_model->saveSellCar($this->input->post());
        if($flag){
          $this->session->set_flashdata('success', '<h3>Your Message has been sent successfully</h3>
          <p>Thank you for sending us your enquiry, we will get back to you as soon as we can.</p>');
        }else{
          $this->session->set_flashdata('error', 'There is an error, Please try again');
        }
      }else{
        $err = validation_errors('<div style="color: #fff;">', '</div>');
        $this->session->set_flashdata('error', $err);
      }
        redirect('sellcar');
  }

  public function carLocator($car){

  }
}
