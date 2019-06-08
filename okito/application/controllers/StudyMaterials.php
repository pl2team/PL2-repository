<?php

class StudyMaterials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('study_materials_model');
        $this->load->helper('url');
    }

    public function index($id)
    {
       if ($id == null) {
           redirect('/courses');
           return;
      }
        $studyMaterials = $this->study_materials_model->StudyMaterialsGet($id);
        $data = array('studyMaterials' => $studyMaterials);
        $this->load->view('templates/header');
        $this->load->view('studymaterials', $data);
        $this->load->view('templates/footer');
    }
    public function lesson($id){
      if ($id == null) {
           redirect('/courses');
           return;
      }
   
        $studyMaterials = $this->study_materials_model->GetLesson($id);
        $data = array('studyMaterials' => $studyMaterials);
        $this->load->view('templates/header');
        $this->load->view('lesson', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        if(!$this->session->userdata('logged_in')){
           redirect('login');
       }
        $data['title']='Tananyag létrehozása';
        $this->load->model('courses_model');
        $courses = $this->courses_model->CoursesGet();
        $data['courses'] =  $courses;
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('id','Tantárgy','required');
        $this->form_validation->set_rules('body','Szöveg','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('createLesson',$data);
            $this->load->view('templates/footer');           
        }
        else{
            $this->load->model('study_materials_model');
            $this->study_materials_model->create_lesson();   
            $this->session->set_flashdata('created','Sikeresen hozzáadtad a tananyagot');
            redirect('courses');  
        }
    }
    public function Lessons(){
        $this->load->model("courses_model");
 
        $courses = $this->courses_model->CoursesGet();
        foreach ($courses as $course) {
            $course['tantargyak'] = $this->study_materials_model->GetLesson($id);
        }
        $data['courses'] = $courses;
    }
}