<?php

class StudyMaterials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('study_materials_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $id = $this->input->get('id');
       if ($id == null) {
           redirect('/courses');
            return;
      }
        $studyMaterials = $this->study_materials_model->StudyMaterialsGet($id);
        $data = array('studyMaterials' => $studyMaterials);
        $this->load->view('studymaterials', $data);
    }
}