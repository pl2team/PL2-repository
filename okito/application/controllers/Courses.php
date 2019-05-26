<?php

class Courses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $courses = $this->course_model->CoursesGet();
        $data = array('courses' => $courses);
        $this->load->view('main', $data);
    }
}
