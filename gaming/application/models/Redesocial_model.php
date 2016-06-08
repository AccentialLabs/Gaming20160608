<?php
include("/../entities/RedesocialEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Redesocial_model
 *
 * @author Raphael Pizzo
 */


class Redesocial_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_redesocial($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('redesocial');
            return $query->result_array();
        }

        $query = $this->db->get_where('redesocial', array('id' => $slug));
        
        
        $redesocialEntity = new RedesocialEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_redesocial() {
        $this->load->helper('url');

        $redesocialEntity = new RedesocialEntity();
        $redesocialEntity->setEmpresa_id($this->input->post('empresa_id'));
        $redesocialEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'empresa_id' => $this->input->post('empresa_id'),
            'datacadastro' => $this->input->post('datacadstro'),
        );

        return $this->db->insert('redesocial', $data);
    }
    //put your code here
}