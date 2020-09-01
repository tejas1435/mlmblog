<?php

class About extends CI_controller
{
  public function index($offset = 0){
    // pagination config
    $config['base_url'] = base_url().'about/index';

    $this->load->view('frontend/header');
    $this->load->view('frontend/aboutUs');
    $this->load->view('frontend/footer');
  }
}

 ?>
