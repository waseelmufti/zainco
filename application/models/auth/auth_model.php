<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function verify_user($username, $password){

    $q = $this->db
              ->where('email', $username)
               ->or_where('username', $username)
              ->where('password', sha1($password))
               ->limit(1)
              ->get('users');

              if($q->num_rows() > 0){
                return $q->row();
              }

              return false;
  }
}
