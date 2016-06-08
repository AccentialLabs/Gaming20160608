<?php

include("/../entities/JogadorEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jogador_model
 *
 * @author Raphael Pizzo
 */
class Jogador_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_jogador($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('jogador');
            return $query->result_array();
        }

        $query = $this->db->get_where('jogador', array('id' => $slug));
        
        
        $jogadorEntity = new JogadorEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_jogador() {
        $this->load->helper('url');

        $jogadorEntity = new JogadorEntity();
        $jogadorEntity->setNome($this->input->post('nome'));
        $jogadorEntity->setSobrenome($this->input->post('sobrenome'));
        $jogadorEntity->setPosicao($this->input->post('posicao'));
        $jogadorEntity->setJogador($this->input->post('descricao'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'posicao' => $this->input->post('posicao'),
            'descricao' => $this->input->post('descricao')
        );

        return $this->db->insert('jogador', $data);
    }
    //put your code here
}