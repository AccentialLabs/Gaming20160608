<?php

include("/../entities/FacebookempresaEntity.php");
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
class Facebookempresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_facebookempresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('Facebookempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('Facebookempresa', array('id' => $slug));
        
        
        $facebookempresaEntity = new FacebookempresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_facebookempresa() {
        $this->load->helper('url');

        $facebookempresaEntity = new FacebookempresaEntity();
        $facebookempresaEntity->setDescricao($this->input->post('descricao'));
        $facebookempresaEntity->setEmpresa_id($this->input->post('empresa'));
        $facebookempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $facebookempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro'),
        );

        return $this->db->insert('facebookempresa', $data);
    }
    //put your code here
}
