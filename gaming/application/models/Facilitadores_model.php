<?php
include("/../entities/FacilitadoresEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facilitadores_model
 *
 * @author Raphael Pizzo
 */
class Facilitadores_model extends CI_Model {
      
     public function __construct() {
         $this->load->database();
     }
     
     public function get_facilitadores ($alug = FALSE){
         if ($alug === FALSE) {
             $query = $this->db->get('facilitadores');
             return $query->result_array();
         }
         
         $query = $this->db->get_where('facilitadores', array('id' => $slug));
         
         $facilitadoresEntity = new FacilitadoresEntity();
         
         return $query->row_array();
     }
     
     public function insert_facilitadores(){
         $this->load->helper('url');
         
         $facilitadoresEntity = new FacilitadoresEntity();
         $facilitadoresEntity->setNome($this->input->post('nome'));
         $facilitadoresEntity->setEmail($this->input->post('email'));
         $facilitadoresEntity->setTelefone($this->input->post('telefone'));
         $facilitadoresEntity->setStatus($this->input->post('status'));
         
         $alug = url_title ($this->input->post('title','dash',TRUE));
         
          $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'status' => $this->input->post('status')
        );
          
          return $this->db->insert('facilitadores', $data);
     }  
}