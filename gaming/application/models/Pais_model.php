<?php

include("/../entities/PaisEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade_model
 *
 * @author Raphael Pizzo
 */
class Pais_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_pais($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('pais');
            return $query->result_array();
        }

        $query = $this->db->get_where('pais', array('id' => $slug));
        
        
        $paisEntity = new PaisEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_pais() {
        $this->load->helper('url');

        $paisEntity = new PaisEntity();
        $paisEntity->setDescricao($this->input->post('descricao'));
       
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao') 
        );

        return $this->db->insert('pais', $data);
    }
    //put your code here
}
