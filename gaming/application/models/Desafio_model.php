<?php

include("/../entities/DesafioEntity.php");
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
class Desafio_model extends CI_Model {
 
     public function __construct() {
        $this->load->database();
    }
    
     public function get_desafio($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('desafio');
            return $query->result_array();
        }

        $query = $this->db->get_where('desafio', array('id' => $slug));
        
        
        $desafioEntity = new DesafioEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_desafio() {
        $this->load->helper('url');

        $desafioEntity = new DesafioEntity();
        $desafioEntity->setNome($this->input->post('nome'));
        $desafioEntity->setStatus($this->input->post('status'));
        $desafioEntity->setDatainicio($this->input->post('datainicio'));
        $desafioEntity->setDatatermino($this->input->post('datatermino'));
        $desafioEntity->setHorainicio($this->input->post('horainicio'));
        $desafioEntity->setHoratermino($this->input->post('horatermino'));
        $desafioEntity->setSelecdesafianteequipe($this->input->post('selecdesafianteeuipe'));
        $desafioEntity->setSelecfuncionario($this->input->post('selecfuncionario'));
        $desafioEntity->setSelecequipe($this->input->post('selecequipe')); 
        $desafioEntity->setDesafiantetodos($this->input->post('desafiantetodos'));
        $desafioEntity->setDefinirmanualmente($this->input->post('definirmanualmente'));
        $desafioEntity->setIdentificada($this->input->post('identificada'));
        $desafioEntity->setAnonima($this->input->post('anonima'));
        $desafioEntity->setDesafiadoescolhe($this->input->post('desafiadoescolhe'));
        $desafioEntity->setObrigatorio($this->input->post('obrigatorio'));
        $desafioEntity->setPontuacaoextra($this->input->post('pontuacaoextra'));
        $desafioEntity->setPerde($this->input->post('perde'));
        $desafioEntity->setGanha($this->input->post('ganha'));
        $desafioEntity->setDicatela($this->input->post('dicatela'));

        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'status' => $this->input->post('status'),
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'selecdesafianteequipe' => $this->input->post('selecdesafianteequipe'),
            'selecfuncionario' => $this->input->post('selecfuncionario'),
            'selecequipe' => $this->input->post('selecequipe'),
            'desafiantetodos' => $this->input->post('desafiantetodos'),
            'definirmanualmente' => $this->input->post('definirmanualmente'),
            'identificada' => $this->input->post('identificada'),
            'anonima' => $this->input->post('anonima'),
            'desafiadoescolhe' => $this->input->post('desafiadoescolhe'),
            'obrigatorio' => $this->input->post('obrigatorio'),
            'pontuacaoextra' => $this->input->post('pontuacaoextra'),
            'perde' => $this->input->post('perde'),
            'ganha' => $this->input->post('ganha'),
            'dicatela' => $this->input->post('dicatela'),
        );
        
        return $this->db->insert('desafio', $data);
    }
    //put your code here
} 