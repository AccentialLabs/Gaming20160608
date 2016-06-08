<?php

include("/../entities/EquipesEntity.php");

class Equipes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_equipes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('equipes');
            return $query->result_array();
        }

        $query = $this->db->get_where('equipes', array('id' => $slug));
        
        
        $equipesEntity = new EquipesEntity();
        
        return $query->row_array();
    }

    public function insert_equipes() {
        $this->load->helper('url');
        
        $equipesEntity = new EquipesEntity();
        $equipesEntity->setCargo_id($this->input->post('cargo_id'));
        $equipesEntity->setDepartamento_id($this->input->post('departamento_id'));
        $equipesEntity->setDepartamento_id($this->input->post('descricao_id'));
        $equipesEntity->setCidade_id($this->input->post('cidade_id'));
        $equipesEntity->setEstado_id($this->input->post('estado_id'));
        $equipesEntity->setPais_id($this->input->post('pais_id'));
        $equipesEntity->setQuantidade($this->input->post('quantidade'));
        $equipesEntity->setDatacadastro($this->input->post('datacadastro'));
        $equipesEntity->setDatainicio($this->input->post('datainicio'));
        $equipesEntity->setDatafim($this->input->post('datafim'));
        $equipesEntity->setTema_id($this->input->post('tema_id'));
           
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

           $data = array(
            'cargo_id' => $this->input->post('cargo_id'),
            'departamento_id' => $this->input->post('departamento_id'),
            'unidade_id' => $this->input->post('unidade_id'),
            'cidade_id' => $this->input->post('cidade_id'),
            'estado_id' => $this->input->post('estado_id'),
            'pais_id' => $this->input->post('pais_id'),
            'quantidade' => $this->input->post('quantidade'),
            'datacadastro' => $this->input->post('datacadastro'),
            'datainicio' => $this->input->post('datainicio'),
            'datafim' => $this->input->post('datafim'),
            'tema_id' => $this->input->post('tema_id')
               
        );
           
        return $this->db->insert('equipes', $data);
    }
    //put your code here
}