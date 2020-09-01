<?php

class Contactus extends CI_controller
{
  public function index($offset = 0){
    // pagination config
    $config['base_url'] = base_url().'contactus/index';

    $this->load->view('frontend/header');
    $this->load->view('frontend/contactUs');
    $this->load->view('frontend/footer');
  }
}

 ?>
