<?php

class Courses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('courses_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $courses = $this->courses_model->CoursesGet();
        $data = array('courses' => $courses);
        $this->load->view('courses', $data);
    }
    public function course($id){
        $courses = $this->courses_model->CoursesGet();
        $data = array('courses' => $courses);
        $this->load->view('courses', $data);
    }
}
