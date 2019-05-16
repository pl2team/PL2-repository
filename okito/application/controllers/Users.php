<?php

class Users extends CI_Controller{
    
    public function Registration(){
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('registration');
    }
    public function register(){
        echo 'dummy page regisztráció után.';
    }
}
