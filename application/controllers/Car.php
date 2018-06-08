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
  'title' => $_POST['title'],
  'makeof' => $_POST['makeof'],
  'model' => $_POST['model'],
  'price' => $_POST['price'],
  'discount' => $_POST['discount'],
    'registered' => $_POST['register'],
    'owners' => $_POST['owners'],
  'body_style' => $_POST['body_style'],
  'color' => $_POST['color'],
  'no_doors' => $_POST['no_doors'],
  'no_seats' => $_POST['no_seats'],
  'engine_size' => $_POST['engine_size'],
  'engine_capacity' => $_POST['engine_capacity'],
  'fuel_type' => $_POST['fuel_type'],
  'transmission' => $_POST['transmission'],
  'co_emission' => $_POST['co_emission'],
    'gearbox' => $_POST['gearbox'],
    
  'fuel_cons_ur' => $_POST['fuel_cons_ur'],
  'fuel_cons_ex' => $_POST['fuel_cons_ex'],
  'fuel_cons_com' => $_POST['fuel_cons_com'],
  'z_s_mph' => $_POST['z_s_mph'] ,
  'top_speed' => $_POST['top_speed'],
  'cylinders' => $_POST['cylinders'],
  'engine_pow' => $_POST['engine_pow'],
  'engine_tor' => $_POST['engine_tor'],
  'length' => $_POST['length'],
  'wheelbase' => $_POST['wheelbase'],
  'width' => $_POST['width'],
  'description' => $_POST['description'],
);

$c_id = $this->car_model->saveCar($data);
echo 'data is inserted in database';
if($c_id){
  //Seperating Multiple Values for car
  $interiors = $_POST['interior'];

  foreach($interiors as $inter ){
    $this->car_model->saveInterior($inter, $c_id);
  }

  $comforts = $_POST['comfort'];
  foreach($comforts as $comfort ){
    $this->car_model->saveComfort($comfort, $c_id);
  }

  $exteriors = $_POST['exterior'];
  foreach($exteriors as $exterior ){
    $this->car_model->saveExterior($exterior, $c_id);
  }

  $safetys = $_POST['safety'];
  foreach($safetys as $safety ){
    $this->car_model->saveSafety($safety, $c_id);
  }

  $others = $_POST['other'];
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
  echo $id;
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
   
}