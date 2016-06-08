<?php

include("/../entities/EquipeusuarioEntity.php");
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
class Equipeusuario_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_equipeusuario($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('equipeusuario');
            return $query->result_array();
        }

        $query = $this->db->get_where('equipeusuario', array('id' => $slug));
        
        
        $equipeusuarioEntity = new EquipeusuarioEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_equipeusuario() {
        $this->load->helper('url');

        $equipeusuarioEntity = new EquipeusuarioEntity();
        $equipeusuarioEntity->setUsuario_id($this->input->post('usuario_id'));
        $equipeusuarioEntity->setEquipes_id($this->input->post('equipes_id'));
        $equipeusuarioEntity->setDatacadastro($this->input->post('datacadastro'));
        
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'usuario_id' => $this->input->post('usuario_id'),
            'equipes_id' => $this->input->post('equipes_id'),
            'datacadastro' => $this->input->post('datacadastro')
        );

        return $this->db->insert('equipeusuario', $data);
    }
    //put your code here
}
