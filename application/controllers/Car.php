<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller{

public function __construct(){
  parent::__construct();
  $this->load->library('session');
  if(!$this->session->has_userdata('username')){
    redirect('usr/login');
  }

  $this->load->model('car/car_model', 'car_model');
}

public function carList(){
  $data['results'] = $this->car_model->get_list();
  $this->load->view('admin/inc/header');
  $this->load->view('admin/inc/sidebar');
  $this->load->view('admin/carmanager/index', $data);
  $this->load->view('admin/inc/footer');
}

public function carAdd(){
  $this->load->view('admin/inc/header');
  $this->load->view('admin/inc/sidebar');
  $this->load->view('admin/carmanager/add');
  $this->load->view('admin/inc/footer');
}

public function carSave(){
//Seperating single Values for car
$data = array(
  'title' => $this->input->post('title'),
  'makeof' => $this->input->post('makeof'),
  'model' => $this->input->post('model'),
  'price' => $this->input->post('price'),
  'discount' => $this->input->post('discount'),
    'registered' => $this->input->post('register'),
    'owners' => $this->input->post('owners'),
  'body_style' => $this->input->post('body_style'),
  'color' => $this->input->post('color'),
  'no_doors' => $this->input->post('no_doors'),
  'no_seats' => $this->input->post('no_seats'),
  'engine_size' => $this->input->post('engine_size'),
  'engine_capacity' => $this->input->post('engine_capacity'),
  'fuel_type' => $this->input->post('fuel_type'),
  'transmission' => $this->input->post('transmission'),
  'co_emission' => $this->input->post('co_emission'),
    'gearbox' => $this->input->post('gearbox'),
    
  'fuel_cons_ur' => $this->input->post('fuel_cons_ur'),
  'fuel_cons_ex' => $this->input->post('fuel_cons_ex'),
  'fuel_cons_com' => $this->input->post('fuel_cons_com'),
  'z_s_mph' => $this->input->post('z_s_mph') ,
  'top_speed' => $this->input->post('top_speed'),
  'cylinders' => $this->input->post('cylinders'),
  'engine_pow' => $this->input->post('engine_pow'),
  'engine_tor' => $this->input->post('engine_tor'),
  'length' => $this->input->post('length'),
  'wheelbase' => $this->input->post('wheelbase'),
  'width' => $this->input->post('width'),
  'description' => $this->input->post('description'),
);    

$c_id = $this->car_model->saveCar($data);
if($c_id){
  //Seperating Multiple Values for car
  $interiors = $this->input->post('interior');

  foreach($interiors as $inter ){
    $this->car_model->saveInterior($inter, $c_id);
  }

  $comforts = $this->input->post('comfort');
  foreach($comforts as $comfort ){
    $this->car_model->saveComfort($comfort, $c_id);
  }

  $exteriors = $this->input->post('exterior');
  foreach($exteriors as $exterior ){
    $this->car_model->saveExterior($exterior, $c_id);
  }

  $safetys = $this->input->post('safety');
  foreach($safetys as $safety ){
    $this->car_model->saveSafety($safety, $c_id);
  }

  $others = $this->input->post('other');
  foreach($others as $other ){
    $this->car_model->saveOther($other, $c_id);
  }

    
  //Files Upload Logic
  if(!empty($_FILES['carImages']['name'])){

    $filesCount = count($_FILES['carImages']['name']);
    for($i = 0; $i < $filesCount; $i++){
      $_FILES['carImage']['name'] = $_FILES['carImages']['name'][$i];
      $_FILES['carImage']['type'] = $_FILES['carImages']['type'][$i];
      $_FILES['carImage']['tmp_name'] = $_FILES['carImages']['tmp_name'][$i];
      $_FILES['carImage']['error'] = $_FILES['carImages']['error'][$i];
      $_FILES['carImage']['size'] = $_FILES['carImages']['size'][$i];
      //Upload files configuration
      $uploadPath = './uploads/images/';
      $config['upload_path'] = $uploadPath;
      $config['allowed_types'] = 'gif|jpg|png';
      //rename the files
      // echo $newName = $_FILES['carImage']['name'].'-'.$c_id.'-'.$i; echo '<br>';
      // $config['file_name'] = $newName;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);


      if($this->upload->do_upload('carImage')){
          $fileData = $this->upload->data();
          $uploadData[$i]['image'] = $fileData['file_name'];
          $uploadData[$i]['car_id'] = $c_id;
    }

    }

    if(!empty($uploadData)){
          //Insert file information into the database
          $insert = $this->car_model->saveImg($uploadData);
          if($insert){
              $msg = 'Record is entered successfully.';
              $this->session->set_flashdata('success',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }

      }
  }
}
redirect('admin/dashboard/car/add');
}
public function carEdit($id){
    $data = $this->car_model->get_car($id);
    
    if(!$data){ redirect('404');}
    
  $this->load->view('admin/inc/header');
  $this->load->view('admin/inc/sidebar');
  $this->load->view('admin/carmanager/edit', $data);
  $this->load->view('admin/inc/footer');
    
}

public function carUpdate(){
    
    $data = array(
      'title' => $this->input->post('title'),
      'makeof' => $this->input->post('makeof'),
      'model' => $this->input->post('model'),
      'price' => $this->input->post('price'),
      'discount' => $this->input->post('discount'),
        'registered' => $this->input->post('register'),
        'owners' => $this->input->post('owners'),
      'body_style' => $this->input->post('body_style'),
      'color' => $this->input->post('color'),
      'no_doors' => $this->input->post('no_doors'),
      'no_seats' => $this->input->post('no_seats'),
      'engine_size' => $this->input->post('engine_size'),
      'engine_capacity' => $this->input->post('engine_capacity'),
      'fuel_type' => $this->input->post('fuel_type'),
      'transmission' => $this->input->post('transmission'),
      'co_emission' => $this->input->post('co_emission'),
        'gearbox' => $this->input->post('gearbox'),

      'fuel_cons_ur' => $this->input->post('fuel_cons_ur'),
      'fuel_cons_ex' => $this->input->post('fuel_cons_ex'),
      'fuel_cons_com' => $this->input->post('fuel_cons_com'),
      'z_s_mph' => $this->input->post('z_s_mph') ,
      'top_speed' => $this->input->post('top_speed'),
      'cylinders' => $this->input->post('cylinders'),
      'engine_pow' => $this->input->post('engine_pow'),
      'engine_tor' => $this->input->post('engine_tor'),
      'length' => $this->input->post('length'),
      'wheelbase' => $this->input->post('wheelbase'),
      'width' => $this->input->post('width'),
      'description' => $this->input->post('description'),
    );
        $c_id = $this->input->post('car_id');
        $result = $this->car_model->updateCar($data, $c_id);
        $c_id = $this->input->post('car_id');
        if($c_id){
            
          //Seperating Multiple Values for car
            $interiors = $this->input->post('interior');
            $this->db->where('car_id', $c_id);
            $this->db->delete('interior');
          
            foreach($interiors as $inter ){
                $this->car_model->saveInterior($inter, $c_id);
            }

            $comforts = $this->input->post('comfort');
            $this->db->where('car_id', $c_id);
            $this->db->delete('comfort');
  
            foreach($comforts as $comfort ){
                $this->car_model->saveComfort($comfort, $c_id);
            }

            $exteriors = $this->input->post('exterior');
            $this->db->where('car_id', $c_id);
            $this->db->delete('exterior');
            
            foreach($exteriors as $exterior ){
                $this->car_model->saveExterior($exterior, $c_id);
            }

            $safetys = $this->input->post('safety');
            $this->db->where('car_id', $c_id);
            $this->db->delete('safety');
            
            foreach($safetys as $safety ){
                $this->car_model->saveSafety($safety, $c_id);
            }
            
            $others = $this->input->post('other');
            $this->db->where('car_id', $c_id);
            $this->db->delete('other');
            
            foreach($others as $other ){
                $this->car_model->saveOther($other, $c_id);
            }
            
            
            //Getting old images from form fields
            $images = $this->input->post('img_name');
            $c = count($images);
            $car_img = array();
            for($i=0; $i<$c ; $i++){
                $car_img[$i]['image'] = $images[$i];
                $car_img[$i]['car_id'] = $c_id;
            }
            
            if(!empty($car_img)){
                $this->db->where('car_id', $c_id);
                $this->db->delete('car_image');
              //Insert car images into the database
              $insert = $this->car_model->saveImg($car_img);
                }
            
            //Getting New images If uploaded
            //Files Upload Logic
  if(!empty($_FILES['carImages']['name'])){

    $filesCount = count($_FILES['carImages']['name']);
    for($i = 0; $i < $filesCount; $i++){
      $_FILES['carImage']['name'] = $_FILES['carImages']['name'][$i];
      $_FILES['carImage']['type'] = $_FILES['carImages']['type'][$i];
      $_FILES['carImage']['tmp_name'] = $_FILES['carImages']['tmp_name'][$i];
      $_FILES['carImage']['error'] = $_FILES['carImages']['error'][$i];
      $_FILES['carImage']['size'] = $_FILES['carImages']['size'][$i];
      //Upload files configuration
      $uploadPath = './uploads/images/';
      $config['upload_path'] = $uploadPath;
      $config['allowed_types'] = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);


      if($this->upload->do_upload('carImage')){
          $fileData = $this->upload->data();
          $uploadData[$i]['image'] = $fileData['file_name'];
          $uploadData[$i]['car_id'] = $c_id;
    }

    }

    if(!empty($uploadData)){
          //Insert file information into the database
          $insert = $this->car_model->saveImg($uploadData);
          if($insert){
              $msg = 'Record is Updated successfully.';
              $this->session->set_flashdata('success',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
      }
  }
        }
    if($result){
              $msg = 'Record is entered successfully.';
              $this->session->set_flashdata('success',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
    
    redirect('admin/dashboard/car');
    }

public function carDelete($id){
  
    $flag = $this->car_model->delete_car($id);
    if($flag){
              $msg = 'Record is Deleted successfully.';
              $this->session->set_flashdata('error',$msg);
          }else{
            $msg = 'Some problem occurred, please try again.';
            $this->session->set_flashdata('error',$msg);
          }
    
    redirect('admin/dashboard/car');
}
public function imgDelete(){
    $car_id = $this->input->get('car_id');
    $img_id = $this->input->get('img_id');
    $img_name = $this->input->get('img_name'); 
    if($car_id && $img_id && $img_name){
    $flag = $this->car_model->del_imgs($car_id, $img_id, $img_name);
    if($flag){
        return 'success';
    }else{
        header('HTTP/1.1 500 Error');
        return 'error';
    }
        }
}    
   
}