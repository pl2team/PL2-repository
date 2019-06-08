<?php

class study_materials_model extends CI_Model
{
    public function __construct()
   {
        $this->load->database();
                $this->load->helper('url');
        $this->load->helper('form');
    }

    function StudyMaterialsGet($IdTantargy)
    {
        $query = $this->db->get_where('tananyagok', array('IdTantargy' => $IdTantargy));
        return $query->result();
    }
    public function create(){
        if(!$this->session->userdata('logged_in')){
           redirect('login');
       }
        $data['title']='Tananyag létrehozása';
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('body','Szöveg','required');
        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('createlesson',$data);
            $this->load->view('templates/footer');           
        }
        else{
            $this->load->model('study_materials_model');
            $this->page_model->create_lesson();   
            $this->log_model->log('Page created',$this->session->userdata('user_id'));
            $this->session->set_flashdata('created','Sikeresen hozzáadtad a tananyagot');
            redirect('courses');  
        }
    }
}