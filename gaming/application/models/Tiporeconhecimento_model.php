<?php

include("/../entities/TiporeconhecimentoEntity.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tiporeconhecimento_model
 *
 * @author Raphael Pizzo
 */
class Tiporeconhecimento_model extends CI_Model {
    
  public function __construct() {
        $this->load->database();
    }
    
     public function get_tiporeconhecimento($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('Tiporeconhecimento');
            return $query->result_array();
        }

        $query = $this->db->get_where('Tiporeconhecimento', array('id' => $slug));
        
        
        $TiporeconhecimentoEntity = new TiporeconhecimentoEntity();
        
        return $query->row_array();
    }
    
    public function insert_tiporeconhecimento() {
        $this->load->helper('url');

        $tiporeconhecimentoEntity = new TiporeconhecimentoEntity();
        $tiporeconhecimentoEntity->setTipo($this->input->post('tipo'));
        $tiporeconhecimentoEntity->setConquista($this->input->post('modoafericao'));
        $tiporeconhecimentoEntity->setModoafericao($this->input->post('tipo'));
        $tiporeconhecimentoEntity->setQuantidadeponto($this->input->post('quantidadeponto'));
        $tiporeconhecimentoEntity->setReconhecimento($this->input->post('reconhecimento'));
        $tiporeconhecimentoEntity->setBadge($this->input->post('badge'));
        $tiporeconhecimentoEntity->setParabens($this->input->post('parabens'));
        $tiporeconhecimentoEntity->setConteudodestravado($this->input->post('conteudodestravado'));
        $tiporeconhecimentoEntity->setPremiacao($this->input->post('premiacao'));
        $tiporeconhecimentoEntity->setModoafericao($this->input->post('tipo'));
        $tiporeconhecimentoEntity->setPontosextras($this->input->post('pontosextras'));
        $tiporeconhecimentoEntity->setTextologin($this->input->post('textologin'));
        $tiporeconhecimentoEntity->setStatus($this->input->post('status'));
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array( 
            'tipo' => $this->input->post('tipo'),
            'conquista' => $this->input->post('conquista'),
            'modoafericao' => $this->input->post('modoafericao'),
            'quantidadeponto' => $this->input->post('quantidadeponto'),
            'reconhecimento' => $this->input->post('reconhecimento'),
            'badge' => $this->input->post('badge'),
            'parabens' => $this->input->post('parabens'),
            'conteudodestravado' => $this->input->post('conteudodestravado'),
            'premiacao' => $this->input->post('premiacao'),
            'pontosextras' => $this->input->post('pontosextras'),
            'textologin' => $this->input->post('textologin'),
            'status' => $this->input->post('status')
            
        );

        return $this->db->insert('tiporeconhecimento', $data);
    } 
    //put your code here
}
