<?php
include("/../entities/RealizacoestabEntity.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastraobjetos_model
 *
 * @author Raphael Pizzo
 */
class Realizacoestab_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_realizacoestab($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('realizacoestab');
            return $query->result_array();
        }

        $query = $this->db->get_where('realizacoestab', array('id' => $slug));
        
        $realizacoestabEntity = new RealizacoestabEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_realizacoestab() {
        $this->load->helper('url');

        $realizacoestabEntity = new CadastraobjetosEntity();
        $realizacoestabEntity->setRealizacoes($this->input->post('realizacoes'));
        $realizacoestabEntity->setDataaquisicao($this->input->post('dataaquisicao'));
        $realizacoestabEntity->setStatus($this->input->post('status'));
      

  
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'realizacoes' => $this->input->post('realizacoes'),
            'dataaquisicao' => $this->input->post('dataaquisicao'),
            'status' => $this->input->post('status'),
  
          
        );
        
        return $this->db->insert('realizacoestab', $data);
    }
    //put your code here
}