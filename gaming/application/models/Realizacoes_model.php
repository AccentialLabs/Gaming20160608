<?php

include("/../entities/RealizacoesEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Realizacoes_model
 *
 * @author Raphael Pizzo
 */
class Realizacoes_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }

     public function get_realizacoes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('realizacoes');
            return $query->result_array();
        }

        $query = $this->db->get_where('realizacoes', array('id' => $slug));
        
        
        $realizacoesEntity = new RealizacoesEntity();

        return $query->row_array();
    }
    
    public function insert_realizacoes() {
        $this->load->helper('url');
        
       
        $realizacoesEntity = new RealizacoesEntity();
        $realizacoesEntity->setDataaquisicao($this->input->post('dataaquisicao'));
        $realizacoesEntity->setNome($this->input->post('nome'));
        $realizacoesEntity->setCargo($this->input->post('cargo'));
        $realizacoesEntity->setDepartamento($this->input->post('departamento'));
        $realizacoesEntity->setUnidade($this->input->post('unidade'));
        $realizacoesEntity->setCidade($this->input->post('cidade'));
        $realizacoesEntity->setEstado($this->input->post('estado'));
        $realizacoesEntity->setPais($this->input->post('pais'));
        $realizacoesEntity->setTelefone($this->input->post('telefone'));
        $realizacoesEntity->setRamal($this->input->post('ramal'));
        $realizacoesEntity->setCelular($this->input->post('celular'));
        $realizacoesEntity->setEmail($this->input->post('email'));
        $realizacoesEntity->setsexo($this->input->post('sexo'));

        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            
            'dataaquisicao' => $this->input->post('dataaquisicao'),
            'nome' => $this->input->post('nome'),
            'cargo' => $this->input->post('cargo'),
            'departamento' => $this->input->post('departamento'),
            'unidade' => $this->input->post('unidade'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'pais' => $this->input->post('pais'),
            'telefone' =>$this->input->post('telefone'),
            'ramal' => $this->input->post('ramal'),
            'celular' => $this->input->post('celular'),
            'email' => $this->input->post('email'),
            'sexo' => $this->input->post('sexo'),

        );
        
        return $this->db->insert('realizacoes', $data);
    }  
}