<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class car_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function get_list(){
    $query = $this->db->get('car_table');
    return $query->result();
  }

  public function get_imgs($id){
    $query = $this->db->where('car_id', $id)->get('car_image');
    return $query->result();
  }

  public function saveCar($car){

    $insert = $this->db->insert('car_table', $car);

    if($insert){
      return $this->db->insert_id();
    }
  }

  public function saveInterior($inter, $id){
    $data = array(
      'feature' => $inter,
      'car_id' => $id
    );

    return $this->db->insert('interior', $data);
  }

  public function saveExterior($exter, $id){
    $data = array(
      'feature' => $exter,
      'car_id' => $id
    );

    return $this->db->insert('exterior', $data);
  }

  public function saveComfort($comfort, $id){
    $data = array(
      'feature' => $comfort,
      'car_id' => $id
    );

    return $this->db->insert('comfort', $data);
  }

  public function saveSafety($safety, $id){
    $data = array(
      'feature' => $safety,
      'car_id' => $id
    );

    return $this->db->insert('safety', $data);
  }

  public function saveOther($other, $id){
    $data = array(
      'feature' => $other,
      'car_id' => $id
    );

    return $this->db->insert('other', $data);
  }

  public function saveImg($data = array()){
      //$data['car_id'] = $id;
        $insert = $this->db->insert_batch('car_image',$data);
        return $insert ? true : false;
    }
}
