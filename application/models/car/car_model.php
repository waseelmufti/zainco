<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function get_list(){
    $query = $this->db->order_by('created_at', 'DESC')->get('car_table');
    return $query->result();
  }

  public function get_imgs($id){
    $query = $this->db->where('car_id', $id)->get('car_image');
    return $query->result();
  }

  public function get_car($id){
    $data = array();
    $car = $this->db->where('id', $id)->get('car_table')->result();
    if($car){
      $interior = $this->db->where('car_id', $id)->get('interior')->result();
      $this->db->select('feature');
      $exterior = $this->db->where('car_id', $id)->get('exterior')->result();
      $this->db->select('feature');
      $comfort = $this->db->where('car_id', $id)->get('comfort')->result();
      $this->db->select('feature');
      $safety = $this->db->where('car_id', $id)->get('safety')->result();
      $this->db->select('feature');
      $other = $this->db->where('car_id', $id)->get('other')->result();
      $this->db->select('image');
      $car_image = $this->db->where('car_id', $id)->get('car_image')->result();

      $data = array(
        'car' => $car,
        'interior' => $interior,
        'exterior' => $exterior,
        'comfort' => $comfort,
        'safety' => $safety,
        'other' => $other,
        'car_image' => $car_image,
      );

    }
    return $data;
  }
    
    public function get_car_img(){
        $this->db->select('car_table.id, car_table.title, car_table.makeof, car_table.model, car_table.price, car_image.image');
        $this->db->from('car_table');
        $this->db->join('car_image', 'car_table.id = car_image.car_id', 'left');
        $this->db->group_by('car_table.id');
        $car = $this->db->limit(10)->order_by('car_table.created_at','DESC')->get();
        return array('cars' => $car->result());
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
