<?php

include("/../entities/GanharpremioEntity.php");
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
class Ganharpremio_model extends CI_Model { 
 
     public function __construct() {
        $this->load->database();
    }
    
     public function get_ganharpremio($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('ganharpremio');
            return $query->result_array();
        } 

        $query = $this->db->get_where('ganharpremio', array('id' => $slug));
        
        
        $ganharpremioEntity = new GanharpremioEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_ganharpremio() {
        $this->load->helper('url');

        $ganharpremioEntity = new GanharpremioEntity();
        $ganharpremioEntity->setCatalogopremio($this->input->post('catalogopremio'));
        $ganharpremioEntity->setTipofiltra($this->input->post('tipofiltra'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'catalogopremio' => $this->input->post('catalogopremio'),
            'tipofiltra' => $this->input->post('tipofiltra'),
        );
        
        return $this->db->insert('ganharpremio', $data);
    }
    //put your code here
} 