<?php

include("/../entities/YoutubeempresaEntity.php");
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
class Youtubeempresa_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_youtubeempresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('youtubeempresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('youtubeempresa', array('id' => $slug));
        
        
        $youtubeempresaEntity = new YoutubeempresaEntity();
        
        return $query->row_array();
    }
    
    public function insert_youtubeempresa() {
        $this->load->helper('url');

        $youtubeempresaEntity = new YoutubeempresaEntity();
        $youtubeempresaEntity->setDescricao($this->input->post('descricao'));
        $youtubeempresaEntity->setEmpresa_id($this->input->post('empresa_id'));
        $youtubeempresaEntity->setPublicaauto($this->input->post('publicaauto'));
        $youtubeempresaEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'empresa_id' => $this->input->post('empresa_id'),
            'publicaauto' => $this->input->post('publicaauto'),
            'datacadastro' => $this->input->post('datacadastro')
        );

        return $this->db->insert('youtubeempresa', $data);
    }
    //put your code here
} 