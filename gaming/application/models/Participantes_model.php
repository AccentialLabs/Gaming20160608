<?php


include("/../entities/ParticipantesEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Participantes_model
 *
 * @author Raphael Pizzo
 */
class Participantes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_participantes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('participantes');
            return $query->result_array();
        }

        $query = $this->db->get_where('participantes', array('id' => $slug));
        
        
        $particiantesEntity = new ParticipantesEntity();
        
        return $query->row_array();
    }
    
    public function insert_participantes() {
        $this->load->helper('url');

        $participantesEntity = new ParticipantesEntity();
        $participantesEntity->setEstesnaojogam($this->input->post('estesnaojogam'));       
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'estesnaojogam' => $this->input->post('estesnaojogam')
        );

        return $this->db->insert('participantes', $data);
    }
    //put your code here
}