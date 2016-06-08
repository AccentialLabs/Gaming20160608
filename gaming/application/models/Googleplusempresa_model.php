<?php

include("/../entities/GoogleplusempresaEntity.php");
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
class Googleplusempresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_googleplusempresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('googleplusempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('googleplusempresa', array('id' => $slug));
        
        
        $googleplusempresaEntity = new GoogleplusempresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_googleplusempresa() {
        $this->load->helper('url');

        $googleplusempresaEntity = new GoogleplusempresaEntity();
        $googleplusempresaEntity->setDescricao($this->input->post('descricao'));
        $googleplusempresaEntity->setEmpresa_id($this->input->post('empresa_id'));
        $googleplusempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $googleplusempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro')
        );

        return $this->db->insert('googleplusempresa', $data);
    }
    //put your code here
}
