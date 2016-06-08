<?php
include("/../entities/ReconhecimentoEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reconhecimento_model
 *
 * @author Raphael Pizzo
 */
class Reconhecimento_model extends CI_Model {
    
  public function __construct() {
        $this->load->database();
    }
    
     public function get_reconhecimento($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('reconhecimento');
            return $query->result_array();
        }

        $query = $this->db->get_where('reconhecimento', array('id' => $slug));
        
        
        $reconhecimentoEntity = new ReconhecimentoEntity();
        
        return $query->row_array();
    }
    
    public function insert_reconhecimento() {
        $this->load->helper('url');

        $reconhecimentoEntity = new ReconhecimentoEntity();
        $reconhecimentoEntity->setReconhecimento($this->input->post('reconhecimento'));
        $reconhecimentoEntity->setStatus($this->input->post('status'));
        $reconhecimentoEntity->setTipo($this->input->post('tipo'));
        $reconhecimentoEntity->setModoafericao($this->input->post('modoafericao'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array( 
            'reconhecimento' => $this->input->post('reconhecimento'),
            'status' => $this->input->post('status'),
            'tipo' => $this->input->post('tipo'),
            'modoafericao' => $this->input->post('modoafericao')
        );

        return $this->db->insert('reconhecimento', $data);
    } 
    //put your code here
}