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
        return $query->result_array();
    }
    function GetLesson($IdTananyag){
        $query = $this->db->get_where('tananyagok', array('IdTananyag' => $IdTananyag));
        return $query->result_array();
    }
    public function create_lesson(){
        $data = array(
          'Megnevezes'=>$this->input->post('title'),  
          'IdFeladattipusok'=>1,  
          'IdTantargy'=>$this->input->post('id'),  
          'Tartalom'=>$this->input->post('body') 
        );
        return $this->db->insert('tananyagok',$data);
    }
    public function modify_lesson(){
        $data = array(
            'Megnevezes' => $this->input->post('title'),
            'IdFeladattipusok'=>1, 
            'IdTantargy'=>$this->input->post('id'),  
            'Tartalom' => $this->input->post('body')
        );
        $this->db->set($data);
        $this->db->where('IdTantargy', $this->input->post('lid'));       
        return $this->db->update('tananyagok');
    }
    public function deleteLesson($id){
            $this->db->where('IdTananyag',$id);

        return $this->db->delete('tananyagok');
    }

}