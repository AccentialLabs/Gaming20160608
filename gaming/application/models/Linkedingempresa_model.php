<?php

include("/../entities/LinkedingempresaEntity.php");
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
class Linkedingempresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_Linkedingempresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('linkedingempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('linkedingempresa', array('id' => $slug));
        
        
        $linkedingempresaEntity = new LinkedingempresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_linkedingempresa() {
        $this->load->helper('url');

        $linkedingempresaEntity = new LinkedingempresaEntity();
        $linkedingempresaEntity->setDescricao($this->input->post('descricao'));
        $linkedingempresaEntity->setEmpresa_id($this->input->post('empresa'));
        $linkedingempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $linkedingempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro')
        ); 

        return $this->db->insert('linkedingempresa', $data);
    }
    //put your code here
}

