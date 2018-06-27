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
    
    /* Setting rules for part exchange form */
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
                            redirect('sell-your-car');
                          }
                    }
              }
        }
    }
    
    redirect('thankyou');
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
/*
*Save the frontend forms in the database
**Car Servicing
**Vehichle Health
**Car Dignose
*/
public function save_car_services(){
    echo '<pre>';
    /* Setting rules for part exchange form */
    $this->form_validation->set_rules('form_type', 'Form Type', 'required');
    $this->form_validation->set_rules('reg_num', 'Registration Number', 'required');
    $this->form_validation->set_rules('make_of_car', 'Make Of Car', 'required');
    $this->form_validation->set_rules('model', 'Model', 'required');
    $this->form_validation->set_rules('year', 'Year', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('phone', 'phone', 'required');
    
    /* Service options are Required*/
    if($this->input->post('form_type') == 'servicing'){
        $this->form_validation->set_rules('want_service[]', 'Atleast One Service', 'required');
    }elseif($this->input->post('form_type') == 'cardignose'){
        $this->form_validation->set_rules('daignose_opt[]', 'Atleast One Option', 'required');
    }
    
    /* Run validation*/
    if($this->form_validation->run() != FALSE){
    
    $data = array(
    'form_type' => $this->input->post('form_type'),
    'reg_no' => $this->input->post('reg_num'),
    'make_of_car' => $this->input->post('make_of_car'),
    'model' => $this->input->post('model'),
    'year' => $this->input->post('year'),
    'mileage' => $this->input->post('mileage'),
    'name' => $this->input->post('name'),
    'email' => $this->input->post('email'),
    'phone' => $this->input->post('phone'),
    );
    
    $cr_id = $this->form_model->save_car_service($data);
    /*If inserted last value exists*/
    if($cr_id){
        /*check form type*/
        if($this->input->post('form_type') == 'servicing'){
            $services = $this->input->post('want_service');
        }elseif($this->input->post('form_type') == 'cardignose'){
            $services = $this->input->post('daignose_opt');
        }
        
        if(isset($services)){
            $c = count($services);
            $form_img = array();
            for($i=0; $i<$c; $i++){
                $form_services[$i]['service'] = $services[$i]; 
                $form_services[$i]['car_ser_id'] = $cr_id; 
                $form_services[$i]['form_type'] = $this->input->post('form_type'); 
            }
                print_r($form_services);
            $flag = $this->form_model->save_car_ser($form_services);
            if(!$flag){
                $msg = 'Some Error Occured Please Try Again';
                $this->session->set_flashdata('error', $msg);
                redirect($_SERVER['HTTP_REFERER']);
            }
            }
        }
    }else{
        /*If Validation is not successful*/
        $err = validation_errors('<div style="color: #fff;">', '</div>');
        $this->session->set_flashdata('error', $err);
        redirect($_SERVER['HTTP_REFERER']);
    }
    $msg = "Thanks for your book service with us our member of staff will contact you with in 24 hour or call us for immediate booking.";
    $this->session->set_flashdata('success', $msg);
    redirect('thankyou');
}/* End Function */    
}
