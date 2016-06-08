<?php

include("/../entities/CidadeEntity.php");
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
class Cidade_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_cidades($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('cidade');
            return $query->result_array();
        }

        $query = $this->db->get_where('cidade', array('id' => $slug));
        
        
        $cidadeEntity = new CidadeEntity();
        
        return $query->row_array();
    }
    
    public function insert_cidade() {
        $this->load->helper('url');

        $cidadeEntity = new CidadeEntity();
        $cidadeEntity->setDescricao($this->input->post('descricao'));
        $cidadeEntity->setEstado_id($this->input->post('estado_id'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'estado_id' => $this->input->post('estado_id')
        );

        return $this->db->insert('cidade', $data);
    }
    //put your code here
}