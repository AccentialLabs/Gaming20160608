<?php

include("/../entities/ObjetosEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objetos_model
 *
 * @author Raphael Pizzo
 */

class Objetos_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_objetos($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('objetos');
            return $query->result_array();
        }

        $query = $this->db->get_where('objetos', array('id' => $slug));
        
        
        $objetosEntity = new ObjetosEntity();
        
        return $query->row_array();
    }
    
    public function insert_objetos() {
        $this->load->helper('url');

        $objetosEntity = new ObjetosEntity();
        $objetosEntity->setObjeto($this->input->post('objeto'));
        $objetosEntity->setCategoria($this->input->post('categoria'));
        $objetosEntity->setObrigacao($this->input->post('obrigacao'));
        $objetosEntity->setStatus($this->input->post('status'));
        $objetosEntity->setAtivo($this->input->post('ativo'));
        $objetosEntity->setPerguntas($this->input->post('perguntas'));
        $objetosEntity->setPontos($this->input->post('pontos'));
        $objetosEntity->setPersonagem($this->input->post('personagem'));
        $objetosEntity->setOrdem($this->input->post('ordem'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'objetos' => $this->input->post('objetos'),
            'categoria' => $this->input->post('categoria'),
            'obrigacao' => $this->input->post('obrigacao'),
            'status' => $this->input->post('status'),
            'ativo' => $this->input->post('ativo'),
            'perguntas' => $this->input->post('perguntas'),
            'pontos' => $this->input->post('pontos'),
            'personagem' => $this->input->post('personagem'),
            'ordem' => $this->input->post('ordem'),
        ); 

        return $this->db->insert('objetos', $data);
    }
    //put your code here
}