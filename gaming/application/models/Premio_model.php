<?php

include("/../entities/PremioEntity.php");
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
class Premio_model extends CI_Model {
 
     public function __construct() {
        $this->load->database();
    }
    
     public function get_premio($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('premio');
            return $query->result_array();
        }

        $query = $this->db->get_where('premio', array('id' => $slug));
        
        
        $premioEntity = new PremioEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_premio() {
        $this->load->helper('url');

        $premioEntity = new PremioEntity();
        $premioEntity->setNome($this->input->post('nome'));
        $premioEntity->setTipopremio_id($this->input->post('tipopremio_id'));
        $premioEntity->setDescricao($this->input->post('descricao'));
        $premioEntity->setFotourl($this->input->post('fotourl'));
        $premioEntity->setSite($this->input->post('site'));
        $premioEntity->setLinkadicional($this->input->post('linkadicional'));
        $premioEntity->setInformacoesadicionais($this->input->post('informacoesadicionais'));
        $premioEntity->setIntrucoes($this->input->post('intrucoes'));
        $premioEntity->setQuantidadecontrolada($this->input->post('quantidadecontrolada'));
        $premioEntity->setQuantidadepremios($this->input->post('quantidadepremios'));
        $premioEntity->setDisponibilidade($this->input->post('disponibilidade'));
        $premioEntity->setQuantidadedisponibilizadade($this->input->post('quantidadedisponibilizadade'));
        $premioEntity->setDatacadastro($this->input->post('datacadastro'));
        $premioEntity->setStatus($this->input->post('status'));
        $premioEntity->setCatalogopremio($this->input->post('catalogopremio')); 
        $premioEntity->setTipofiltra($this->input->post('tipofiltra')); 
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'tipopremio_id' => $this->input->post('tipopremio_id'),
            'descricao' => $this->input->post('descricao'),
            'fotourl' => $this->input->post('fotourl'),
            'site' => $this->input->post('site'),
            'linkadicional' => $this->input->post('linkadicional'),
            'informacoesadicionais' => $this->input->post('informacoesadicionais'),
            'intrucoes' => $this->input->post('intrucoes'),
            'quantidadecontrolada' => $this->input->post('quantidadecontrolada'),
            'quantidadepremios' => $this->input->post('quantidadepremios'),
            'quantidadeatualpremios' => $this->input->post('quantidadeatualpremios'),
            'disponibilidade' => $this->input->post('disponibilidade'),
            'quantidadedisponibilizadade' => $this->input->post('quantidadedisponibilizadade'),
            'datacadastro' => $this->input->post('datacadastro'),
            'status' => $this->input->post('status'),
            'status' => $this->input->post('status'),
            'catalogopremio' => $this->input->post('catalogopremio'),
            'tipofiltra' => $this->input->post('tipofiltra')
        );
        
        return $this->db->insert('premio', $data);
    }
    //put your code here
} 