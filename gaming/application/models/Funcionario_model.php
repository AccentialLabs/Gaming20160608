<?php

include("/../entities/funcionarioEntity.php");
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
class Funcionario_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_funcionario($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('funcionario');
            return $query->result_array();
        }

        $query = $this->db->get_where('funcionario', array('id' => $slug));
        
        
        $funcionarioEntity = new funcionarioEntity();
        
        return $query->row_array();
    }
    
    public function insert_funcionario() {
        $this->load->helper('url');

        $funcionarioEntity = new FuncionarioEntity();
        $funcionarioEntity->setEmail($this->input->post('email'));
        $funcionarioEntity->setSenha($this->input->post('senha'));
        $funcionarioEntity->setNome($this->input->post('nome'));
        $funcionarioEntity->setDatanascimento($this->input->post('datanascimento'));
        $funcionarioEntity->setDatacadastro($this->input->post('datacadastro'));
        $funcionarioEntity->setCargo_id($this->input->post('cargo_id'));
        $funcionarioEntity->setDepartamento_id($this->input->post('departamento_id'));
        $funcionarioEntity->setUnidade_id($this->input->post('unidade_id'));
        $funcionarioEntity->setEndereco($this->input->post('endereco'));
        $funcionarioEntity->setCidade($this->input->post('cidade'));
        $funcionarioEntity->setPerfil_id($this->input->post('perfil_id'));
        $funcionarioEntity->setEndereco($this->input->post('endereco'));
        $funcionarioEntity->setPais($this->input->post('pais'));
        $funcionarioEntity->setEstado($this->input->post('estado'));
        $funcionarioEntity->setStatus($this->input->post('status'));
        $funcionarioEntity->setTelefone($this->input->post('telefone'));
        $funcionarioEntity->setRamal($this->input->post('ramal'));
        $funcionarioEntity->setCelular($this->input->post('celular'));
        $funcionarioEntity->setSexo($this->input->post('sexo'));
        $funcionarioEntity->setUrlfoto($this->input->post('urlfoto'));
        $funcionarioEntity->setEmpresa_id($this->input->post('empresa_id'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'nome' => $this->input->post('nome'),
            'datanascimento' => $this->input->post('datanascimento'),
            'datacadastro' => $this->input->post('datacadastro'),
            'cargo_id' => $this->input->post('cargo_id'),
            'departamento_id' => $this->input->post('departamento_id'),
            'unidade_id' => $this->input->post('unidade_id'),
            'endereco' => $this->input->post('endereco'),
            'cidade' => $this->input->post('cidade'),
            'perfil_id' => $this->input->post('perfil_id'),
            'endereco' => $this->input->post('endereco'),
            'pais' => $this->input->post('pais'),
            'estado' => $this->input->post('estado'),
            'status' => $this->input->post('status'),
            'telefone' => $this->input->post('telefone'),
            'ramal' => $this->input->post('ramal'),
            'celular' => $this->input->post('celular'),
            'sexo' => $this->input->post('sexo'),
            'urlfoto' => $this->input->post('urlfoto'),
            'empresa_id' => $this->input->post('empresa_id')   
        );

        return $this->db->insert('funcionario', $data);
    }
    //put your code here
}