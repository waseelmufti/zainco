<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function saveContact($contact){
    $data = array(
      'name' => $contact['name'],
      'phone' => $contact['phone'],
      'email' => $contact['email'],
      'message' => $contact['message'],
      'active' => 0
    );

    $flag = $this->db->insert('contact_form', $data);
    return $flag;
  }
  public function saveSellCar($car){
    $data = array(
      'reg_no' => $car['registration'],
      'make_of_car' => $car['make'],
      'model' => $car['model'],
      'year' => $car['year'],
      'milage' => $car['mileage'],
      'name' => $car['name'],
      'email' => $car['email'],
      'phone' => $car['phone'],
      'active' => 0
    );

    $flag = $this->db->insert('car_valuation', $data);
    return $flag;
  }
    
    public function save_enquiry($values){
        
        if($values['form_type'] || $values['vehicle_id'] || $values['subject']){
            $data = array(
            'form_type' => $values['form_type'],
                'subject' => $values['subject'],
                'name' => $values['name'],
                'phone' => $values['phone'],
                'email' => $values['email'],
                'message' => $values['message'],
                'car_id' => $values['vehicle_id'],
                'active' => 0,
                
            );
            
            $flag = $this->db->insert( 'enquiry', $data);
            return $flag;
        }
        
        return FALSE;
    }
    
    public function save_part_exch($data){
        $part_exc = array(
'form_type' => $data['form_type'],            
'vehicle' => $data['vehicle'],
'fname' =>$data['fname'],
'lname' =>$data['lname'],
'phone' =>$data['phone'],
'postcode' =>$data['postcode'],
'vehicle_model' =>$data['vehicle_model'],
'engine_size' =>$data['engine_size'],
'color' =>$data['color'],
'vehicle_mileage' =>$data['vehicle_mileage'],
'no_owners' =>$data['no_owners'],
'first_reg' =>$data['first_reg'],
'mot_exp' =>$data['mot_exp'],
'last_service' =>$data['last_service'],
'service_his' =>$data['service_his'],
'last_service_mileage' =>$data['last_service_mileage'],
'general_condition' =>$data['general_condition'],
'message' => $data['message'],
  
  
);    

     $insert = $this->db->insert('general_forms', $part_exc);

    if($insert){
      return $this->db->insert_id();
    }   
    }
    
    public function saveImg($data = array()){
        $insert = $this->db->insert_batch('general_form_images',$data);
        return $insert ? true : false;
    }
}