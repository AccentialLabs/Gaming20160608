<?php
include("/../entities/CadastraobjetosEntity.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastraobjetos_model
 *
 * @author Raphael Pizzo
 */
class Cadastraobjetos_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_cadastraobjetos($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('cadastraobjetos');
            return $query->result_array();
        }

        $query = $this->db->get_where('cadastraobjetos', array('id' => $slug));
        
        $cadastraobjetosEntity = new CadastraobjetosEntity();
        
        
        return $query->row_array();
    }
    
    public function insert_cadastraobjetos() {
        $this->load->helper('url');

        $cadastraobjetosEntity = new CadastraobjetosEntity();
        $cadastraobjetosEntity->setCategoria($this->input->post('categoria'));
        $cadastraobjetosEntity->setPergunta($this->input->post('pergunta'));
        $cadastraobjetosEntity->setRespdescritiva($this->input->post('respdescritiva'));
        $cadastraobjetosEntity->setQtdcaracteres($this->input->post('qtdcaracteres'));
        $cadastraobjetosEntity->setQtdpontos($this->input->post('qtdpontos'));
        $cadastraobjetosEntity->setAlternativas($this->input->post('alternativas'));
        $cadastraobjetosEntity->setRespcorreta($this->input->post('respcorreta'));
        $cadastraobjetosEntity->setNumtentativas($this->input->post('numtentativas'));
        $cadastraobjetosEntity->setLimittempo($this->input->post('limittempo'));
        $cadastraobjetosEntity->setEscala($this->input->post('escala'));
        $cadastraobjetosEntity->setValueminimo($this->input->post('valueminimo'));
        $cadastraobjetosEntity->setIncremento($this->input->post('incremento'));
        $cadastraobjetosEntity->setPontmedio($this->input->post('pontmediio'));
        $cadastraobjetosEntity->setPontescala($this->input->post('pontesacala'));
        $cadastraobjetosEntity->setInteracaofisicareal($this->input->post('interacaofisicareal'));
        $cadastraobjetosEntity->setResposta($this->input->post('resposta'));
        $cadastraobjetosEntity->setPontos($this->input->post('pontos'));
        $cadastraobjetosEntity->setHabilitaqr($this->input->post('habilitaqr'));
  
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'categoria' => $this->input->post('categoria'),
            'pergunta' => $this->input->post('pergunta'),
            'respdescritiva' => $this->input->post('respdescritiva'),
            'qtdcaracteres' => $this->input->post('qtdcaracteres'),
            'qtdpontos' => $this->input->post('qtdpontos'), 
            'alternativas' => $this->input->post('alternativas'),
            'respcorreta' => $this->input->post('respcorreta'),
            'numtentativas' => $this->input->post('numtentativas'),
            'limittempo' => $this->input->post('limittempo'),
            'escala' => $this->input->post('escala'),
            'valueminimo' => $this->input->post('valueminimo'),
            'incremento' => $this->input->post('incremento'),
            'valuefinal' => $this->input->post('valuefinal'),
            'pontmedio' => $this->input->post('pontmedio'),
            'pontescala' => $this->input->post('pontescala'),
            'interacaofisicareal' => $this->input->post('interacaofisicareal'),
            'resposta' => $this->input->post('resposta'),
            'pontos' => $this->input->post('pontos'),
            'habilitaqr' => $this->input->post('habilitaqr'),
            
        );
        
        return $this->db->insert('cadastraobjetos', $data);
    }
    //put your code here
}