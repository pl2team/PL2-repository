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
    
}