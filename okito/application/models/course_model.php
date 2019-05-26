<?php
class course_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function CoursesGet()
    {
        $query = $this->db->get('tantargyak');
        return $query->result();
    }
}