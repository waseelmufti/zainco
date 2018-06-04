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
    
    public function get_user($username){
        $username = $this->db->where('username', $username)
        ->limit(1)
            ->get('users');
        
        if($username->num_rows() > 0){
            return $username->row();
        }
        return FALSE;
    }
    
    public function update_user($user){
        $data = array(
            'first_name' => $user['fname'],
            'last_name' => $user['lname'],
            'username' => $user['username'],
            'email' => $user['email'],
        );
        
        if($user['password']){
            $data['password'] = sha1($user['password']);
        }
        
        $this->db->where('username', $user['username']);
        return $this->db->update('users', $data);
    }
}
