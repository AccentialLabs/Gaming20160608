<?php

include("/../entities/EstadoEntity.php");
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
class Estado_model extends CI_Model { 
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_estado($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('estado');
            return $query->result_array();
        }

        $query = $this->db->get_where('estado', array('id' => $slug));
        
        
        $estadoEntity = new EstadoEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_estado() {
        $this->load->helper('url');

        $estadoEntity = new EstadoEntity();
        $estadoEntity->setDescricao($this->input->post('descricao'));
        $cidadeEntity->setPais_id($this->input->post('pais_id'));
        $cidadeEntity->setUf($this->input->post('uf'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'pais_id' => $this->input->post('pais_id'),
            'uf' => $this->input->post('uf')
        );

        return $this->db->insert('estado', $data);
    }
    //put your code here
}
