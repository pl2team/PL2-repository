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
        $studyMaterials = $this->study_materials_model->StudyMaterialsGet($id);
        $data = array('studyMaterials' => $studyMaterials);
        $this->load->view('templates/header');
        $this->load->view('lesson', $data);
        $this->load->view('templates/footer');
    }
    
}