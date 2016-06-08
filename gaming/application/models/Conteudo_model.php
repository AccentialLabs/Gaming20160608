<?php
include("/../entities/ConteudoEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conteudo_model
 *
 * @author Raphael Pizzo
 */
class Conteudo_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_conteudo($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('conteudo');
            return $query->result_array();
        }

        $query = $this->db->get_where('conteudo', array('id' => $slug));
        
        
        $conteudoEntity = new ConteudoEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_conteudo() {
        $this->load->helper('url');

        $conteudoEntity = new ConteudoEntity();
        $conteudoEntity->setNome($this->input->post('nome'));
        $conteudoEntity->setObjeto($this->input->post('objeto'));
        $conteudoEntity->setStatus($this->input->post('status'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'objeto' => $this->input->post('objeto'),
            'status' => $this->input->post('status')
        );

        return $this->db->insert('conteudo', $data);
    }
    //put your code here
}
