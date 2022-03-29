<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilan extends CI_Controller {
    
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/navigator');
        $this->load->view('posts/index');
        $this->load->view('templates/footer');
    }
}
