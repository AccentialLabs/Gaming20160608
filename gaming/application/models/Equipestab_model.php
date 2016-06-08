<?php

include("/../entities/EquipestabEntity.php");

class Equipestab_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_equipestab($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('equipestab');
            return $query->result_array();
        }

        $query = $this->db->get_where('equipestab', array('id' => $slug));
        
        
        $equipestabEntity = new EquipestabEntity();
        
        return $query->row_array();
    }

    public function insert_equipestab() {
        $this->load->helper('url');
        
        $equipestabEntity = new EquipesEntity();
        $equipestabEntity->setEquipes($this->input->post('equipes'));
        $equipestabEntity->setStatus($this->input->post('status'));

    
           
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

           $data = array(
            'equipes' => $this->input->post('euipes'),
            'status' => $this->input->post('status')
               
        );
           
        return $this->db->insert('equipestab', $data);
    }
    //put your code here
}