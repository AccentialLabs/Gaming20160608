<?php

include("/../entities/TipopremioEntity.php");
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
class Tipopremio_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_tipopremio($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('tipopremio');
            return $query->result_array();
        }

        $query = $this->db->get_where('tipopremio', array('id' => $slug));
        
        
        $tipopremioEntity = new TipopremioEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_tipopremio() {
        $this->load->helper('url');

        $tipopremioEntity = new TipopremioEntity();
        $tipopremioEntity->setDescricao($this->input->post('descricao'));
        $tipopremioEntity->setStatus($this->input->post('status'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'status' => $this->input->post('status')
        );

        return $this->db->insert('tipopremio', $data);
    }
    //put your code here
}
