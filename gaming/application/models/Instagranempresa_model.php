<?php

include("/../entities/InstagranempresaEntity.php");
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
class Instagranempresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_instagranempresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('instagranempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('instagranempresa', array('id' => $slug));
        
        
        $instagranempresaEntity = new instagranempresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_instagranempresa() {
        $this->load->helper('url');

        $instagranempresaEntity = new InstagranempresaEntity();
        $instagranempresaEntity->setDescricao($this->input->post('descricao'));
        $instagranempresaEntity->setEmpresa_id($this->input->post('empresa_id'));
        $instagranempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $instagranempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro')
        );

        return $this->db->insert('instagranempresa', $data);
    }
    //put your code here
}
