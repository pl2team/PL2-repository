<?php

class Users extends CI_Controller
{    
    public function Registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === FALSE)
            {
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->view('registration');
            } 
        else 
            {
                $this->register();
            }
    }
    public function register()
	{
            $enc_password = md5($this->input->post('password'));
            $this->users_model->register($enc_password);
            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
            echo 'dummy page regisztráció után.';
            echo '<br>';
            echo 'Regisztrált: '.  $this->input->post('username');
	}    
}
