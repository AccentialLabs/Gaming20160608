<?php

include("/../entities/TwitterempresaEntity.php");
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
class Twitterempresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_twitterempresas($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('twitterempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('twitterempresa', array('id' => $slug));
        
        
        $twitterempresaEntity = new TwitterempresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_twitterempresa() {
        $this->load->helper('url');

        $twitterempresaEntity = new TwitterempresaEntity();
        $twitterempresaEntity->setDescricao($this->input->post('descricao'));
        $twitterempresaEntity->setEmpresa_id($this->input->post('empresa_id'));
        $twitterempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $twitterempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro'),
        );

        return $this->db->insert('twitterempresa', $data);
    }
    //put your code here
}
