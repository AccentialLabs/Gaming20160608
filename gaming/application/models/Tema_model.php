<?php

include("/../entities/TemaEntity.php");
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
class Tema_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_tema($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('tema');
            return $query->result_array();
        }

        $query = $this->db->get_where('tema', array('id' => $slug));

        $temaEntity = new TemaEntity();
        
        return $query->row_array();
    }
    
    public function insert_tema() {
        $this->load->helper('url');

        $temaEntity = new TemaEntity();
        $temaEntity->setDescricao($this->input->post('descricao'));
        $temaEntity->setStatus($this->input->post('status'));
  
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'status' => $this->input->post('status'),
        );

        return $this->db->insert('tema', $data);
    }
    //put your code here
}
