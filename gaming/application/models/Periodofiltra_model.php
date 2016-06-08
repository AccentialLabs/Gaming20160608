<?php
include("/../entities/PeriodofiltraEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acoes_model
 *
 * @author Raphael Pizzo
 */

//tela ACOES!!!

class Periodofiltra_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_periodofiltra($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('periodofiltra');
            return $query->result_array();
        }

        $query = $this->db->get_where('periodofiltra', array('id' => $slug));
        
        
        $periodofiltraEntity = new PeriodofiltraEntity();  
        return $query->row_array();
    }
    
    public function insert_periodofiltra(){
        $this->load->helper('url');
        
        $periodofiltraEntity = new PeriodofiltraEntity();
        $periodofiltraEntity->setPeriodofiltra($this->input->post('periodofiltra'));
    
        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'periodofiltra' => $this->input->post('periodofiltra'),
        );
        
    return $this->db->insert('periodofiltra', $data);
    }
    //put your code here
}