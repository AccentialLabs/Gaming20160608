<?php

include("/../entities/JogoEntity.php");
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
class Jogo_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_jogo($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('jogo');
            return $query->result_array();
        }

        $query = $this->db->get_where('jogo', array('id' => $slug));
        
        
        $jogoEntity = new JogoEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_jogo() {
        $this->load->helper('url');

        $jogoEntity = new JogoEntity();
        $jogoEntity->setStatus($this->input->post('status'));
        $jogoEntity->setModosimulacao($this->input->post('modosimulacao'));
        $jogoEntity->setPontosexpiram($this->input->post('pontosexpiram'));
        $jogoEntity->setorientacao($this->input->post('orientacao'));
        $jogoEntity->setRegras($this->input->post('regras'));
        $jogoEntity->setDataatualizacao($this->input->post('dataatualizacao'));
        $jogoEntity->setStatus2($this->input->post('status2'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'status' => $this->input->post('status'),
            'modosimulacao' => $this->input->post('modosimulacao'),
            'pontosexpiram' => $this->input->post('pontosexpiram'),
            'orientacao' => $this->input->post('orientacao'),
            'regras' => $this->input->post('regras'),
            'dataatualizacao' => $this->input->post('dataatualizacao'),
            'status2' => $this->input->post('status2')
        );

        return $this->db->insert('jogo', $data);
    }
    //put your code here
}