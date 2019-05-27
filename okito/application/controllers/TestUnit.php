<?php

class TestUnit extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library("unit_test");
    }
    public function division($a,$b){
        return $a/$b;
    }
    public function index(){
        echo "Unit tests for okító.";
        $this->valid_username_less_than_3_char();
        $this->valid_username_more_than_20_char();
        $this->valid_username_contains_special_char();   
    }
    public function valid_username_less_than_3_char(){
        $this->load->model("users_model");
        $test = $this->users_model->valid_username("aa");
        $excepted = false;
        $test_name = "Login username length less than 3";
        echo $this->unit->run($test,$excepted,$test_name);
    }
    public function valid_username_more_than_20_char(){
        $this->load->model("users_model");
        $test = $this->users_model->valid_username("aaaaaaaaaaaaaaaaaaaaaaaa");
        $excepted = false;
        $test_name = "Login username length more than 20";
        echo $this->unit->run($test,$excepted,$test_name);
    }
    public function valid_username_contains_special_char(){
        $this->load->model("users_model");
        $test = $this->users_model->valid_username("$$$$");
        $excepted = false;
        $test_name = "Login username contains special char";
        echo $this->unit->run($test,$excepted,$test_name);
    }
    
    
}

