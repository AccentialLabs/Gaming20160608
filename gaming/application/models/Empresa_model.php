<?php
include("/../entities/EmpresaEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa_model
 *
 * @author Raphael Pizzo
 */

class Empresa_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_empresa($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('empresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('empresa', array('id' => $slug));
        
        
        $empresaEntity = new EmpresaEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_empresa() {
        $this->load->helper('url');

        $empresaEntity = new EmpresaEntity();
        $empresaEntity->setNome($this->input->post('nome'));
        $empresaEntity->setCnpj($this->input->post('cnpj'));
        $empresaEntity->setCep($this->input->post('cep'));
        $empresaEntity->setEndereco($this->input->post('endereco'));
        $empresaEntity->setEndereconumero($this->input->post('endereconumero'));
        $empresaEntity->setenderecocomplemento($this->input->post('enderecocomplemento'));
        $empresaEntity->setBairro($this->input->post('bairro'));
        $empresaEntity->setCidade_id($this->input->post('cidade_id'));
        $empresaEntity->setTelefone1($this->input->post('telefone1'));
        $empresaEntity->setTelefone2($this->input->post('telefone2'));
        $empresaEntity->setEmail($this->input->post('email'));
        $empresaEntity->setSite($this->input->post('site'));
        $empresaEntity->setLogotipourl($this->input->post('logotipourl'));
        $empresaEntity->setResponsavel_id($this->input->post('responsavel_id'));
        $empresaEntity->setResponsaveltefone($this->input->post('responsaveltelefone'));
        $empresaEntity->setResponsavelramal($this->input->post('responsavelramal'));
        $empresaEntity->setResponsavelcelular($this->input->post('responsavelcelular'));
        $empresaEntity->setResponsavelemail($this->input->post('responsavelemail'));
        $empresaEntity->setStatus($this->input->post('status'));
        $empresaEntity->setDatacadastro($this->input->post('datacadastro'));
        $empresaEntity->setSenha($this->input->post('senha'));
        $empresaEntity->setEstado_id($this->input->post('estado_id'));
        $empresaEntity->setPais_id($this->input->post('pais_id'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'cnpj' => $this->input->post('cnpj'),
            'cep' => $this->input->post('cep'),
            'cep' => $this->input->post('cep'),
            'endereco' => $this->input->post('endereco'),
            'endereconumero' => $this->input->post('endereconumero'),
            'enderecocomplemento' => $this->input->post('enderecocomplemento'),
            'bairro' => $this->input->post('bairro'),
            'cidade_id' => $this->input->post('cidade_id'),
            'telefone1' => $this->input->post('telefone1'),
            'telefone2' => $this->input->post('telefone2'),
            'email' => $this->input->post('email'),
            'site' => $this->input->post('site'),
            'logotipourl' => $this->input->post('logotipourl'),
            'responsavel_id' => $this->input->post('responsavel_id'),
            'responsaveltelefone' => $this->input->post('responsaveltelefone'),
            'responsavelramal' => $this->input->post('responsavelramal'),
            'responsavelcelular' => $this->input->post('responsavelcelular'),
            'responsavelemail' => $this->input->post('responsavelemail'),
            'status' => $this->input->post('status'),
            'datacadastro' => $this->input->post('datacadastro'),
            'senha' => $this->input->post('senha'),
            'estado_id' => $this->input->post('estado_id'),
            'pais_id' => $this->input->post('pais_id')
        );

        return $this->db->insert('empresa', $data);
    }
    
    //put your code here
    
      public function empresalogin($senha = FALSE, $email= FALSE) {
        if ($senha === FALSE) {
            $query = $this->db->get('empresa');
            return $query->result_array();
        }

        $query = $this->db->get_where('empresa', array('email' => $email, 'senha'=>$senha));
        
        
        $empresaEntity = new EmpresaEntity();
        
        return $query->row_array();
    }
    
}