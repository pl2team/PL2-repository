<?php

class Users extends CI_Controller{
    
    public function Registration(){
        $this->load->view('registration');
    }
    public function register(){
        redirect('dummy_page');
    }
}
