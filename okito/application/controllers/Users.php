<?php

class Users extends CI_Controller{
    
    public function Registration(){
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('registration');
    }
    public function register(){
        redirect('dummy_page');
    }
}
