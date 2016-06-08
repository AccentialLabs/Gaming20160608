<?php

include("/../entities/PersonagensEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personagens_model
 *
 * @author Raphael Pizzo
 */
class Personagens_model  extends CI_Model{

    public function __construct() {
        $this->load->database();
    }
    
     public function get_personagens($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('personagens');
            return $query->result_array();
        }

        $query = $this->db->get_where('personagens', array('id' => $slug));
        
        
        $personagensEntity = new PersonagensEntity();
        
        return $query->row_array();
    }
    
    public function insert_personagens() {
        $this->load->helper('url');

        $personagensEntity = new PersonagensEntity();
        $personagensEntity->setNome($this->input->post('nome'));
        $personagensEntity->setQuantidademaxima($this->input->post('quantidademaxima'));        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'quantidademaxima' => $this->input->post('quantidademaxima')
        );

        return $this->db->insert('personagens', $data);
    }
    //put your code here
}
