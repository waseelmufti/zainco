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
    
public function enquiry(){
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('message', 'Message', 'required');
    
    if($this->form_validation->run() != FALSE){
        $flag = $this->form_model->save_enquiry($this->input->post());
        if($flag){
          $this->session->set_flashdata('success', '<h3>Your Message has been sent successfully</h3>
          <p>Thank you for sending us your enquiry, we will get back to you as soon as we can.</p>');
            redirect('thankyou');
        }else{
          $this->session->set_flashdata('error', 'There is an error, Please try again');
        }
    }else{
        $err = validation_errors('<div style="color: #fff;">', '</div>');
        $this->session->set_flashdata('error', $err);
      }
    $form_type = $this->input->post('form_type');
    $page = '';
    switch($form_type){
        case 'reserve':
            $page = 'buy-it-now/';
            break;
        case 'testdrive':
            $page = 'book-test-drive/';
            break;
        case 'enquiry':
            $page = 'enquiry/';
            break;
            
        case 'sendoffer':
            $page = 'sendoffer/';
            break;    
        default:
            $page = 'showroom/';
            break;    
    }
    redirect($page.$this->input->post('vehicle_id'));
}    
    
public function save_part_exch(){
    /* Setting rules for part exchange form */
    $this->form_validation->set_rules('vehicle', 'Vehicle', 'required');
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('postcode', 'Postcode', 'required');
    $this->form_validation->set_rules('vehicle_model', 'Vehicle Model', 'required');
    $this->form_validation->set_rules('engine_size', 'Engine Size', 'required');
    $this->form_validation->set_rules('color', 'Colour', 'required');
    $this->form_validation->set_rules('vehicle_mileage', 'Vehicle Mileage', 'required');
    $this->form_validation->set_rules('no_owners', 'No of Owners', 'required');
    $this->form_validation->set_rules('first_reg', 'First Registered', 'required');
    $this->form_validation->set_rules('mot_exp', 'MOT Expires', 'required');
    $this->form_validation->set_rules('last_service', 'Last Service', 'required');
    $this->form_validation->set_rules('service_his', 'Service History', 'required');
    $this->form_validation->set_rules('last_service_mileage', 'Last Service Mileage', 'required');
    $this->form_validation->set_rules('general_condition', 'General Condition', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');

    /* Run validation*/
    if($this->form_validation->run() != FALSE){
        /* Save data to the database */
        $f_id = $this->form_model->save_part_exch($this->input->post());
        
        /* if data is inserted */
        if($f_id){
                     //Files Upload Logic
              if(!empty($_FILES['car_photos']['name'])){

                    $filesCount = count($_FILES['car_photos']['name']);
                  
                    /*Never Upload More than 8 photos */  
                    $filesCount = ($filesCount > 8) ? 8 : $filesCount;

                    for($i = 0; $i < $filesCount; $i++){

                      $_FILES['car_photo']['name'] = $_FILES['car_photos']['name'][$i];
                      $_FILES['car_photo']['type'] = $_FILES['car_photos']['type'][$i];
                      $_FILES['car_photo']['tmp_name'] = $_FILES['car_photos']['tmp_name'][$i];
                      $_FILES['car_photo']['error'] = $_FILES['car_photos']['error'][$i];
                      $_FILES['car_photo']['size'] = $_FILES['car_photos']['size'][$i];
                      //Upload files configuration
                      $uploadPath = './uploads/images/';
                      $config['upload_path'] = $uploadPath;
                      $config['allowed_types'] = 'gif|jpg|png';

                      $this->load->library('upload', $config);
                      $this->upload->initialize($config);

                      if($this->upload->do_upload('car_photo')){
                          $fileData = $this->upload->data();
                          $uploadData[$i]['image'] = $fileData['file_name'];
                          $uploadData[$i]['form_id'] = $f_id;
                          $uploadData[$i]['form_type'] = $this->input->post('form_type') ? $this->input->post('form_type') : 'general';
                      }

                    }

                    if(!empty($uploadData)){
                          //Insert file information into the database
                          $insert = $this->form_model->saveImg($uploadData);
                          if($insert){
                              $msg = 'Record is entered successfully.';
                              $this->session->set_flashdata('success',$msg);
                          }else{
                            $msg = 'Some problem occurred, please try again.';
                            $this->session->set_flashdata('error',$msg);
                            redirect('part-exchange');
                          }
                    }
              }
        }
    }
    
    redirect('thankyou');   
}    

}
