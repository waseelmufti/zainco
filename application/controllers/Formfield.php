<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formfield extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('frontend/formfield_model', 'formfield_model');
    }
    public function index(){
        
    }
}
