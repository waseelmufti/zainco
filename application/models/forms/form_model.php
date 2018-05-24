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
}
