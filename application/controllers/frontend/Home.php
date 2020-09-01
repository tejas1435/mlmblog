<?php

class Home extends CI_controller
{
  public function index($offset = 0){
    // pagination config
    $config['base_url'] = base_url().'home/index';

    $this->load->view('frontend/header');
    $this->load->view('frontend/home');
    $this->load->view('frontend/footer');
  }
}

 ?>
