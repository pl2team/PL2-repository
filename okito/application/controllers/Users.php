<?php

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function Registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('registration');
        } else {
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
        echo 'Regisztrált: ' . $this->input->post('username');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $this->load->library('session');
            $username = $this->input->post('username'); 
            $newdata = array(
                    'username'  => $username,
                    'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            redirect('/courses');
        }
    }

}
