<?php

/*PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS */

include("/../entities/FiltrareconhecimentoEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acoes_model
 *
 * @author Raphael Pizzo
 */

class Filtrareconhecimento_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_filtrareconhecimento($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('filtrareconhecimento');
            return $query->result_array();
        }

        $query = $this->db->get_where('filtrareconhecimento', array('id' => $slug));
        
        
        $filtrareconhecimentoEntity = new FiltrareconhecimentoEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_filtrareconhecimento(){
        $this->load->helper('url');
        
        $filtrareconhecimentoEntity = new FiltrareconhecimentoEntity();
        $filtrareconhecimentoEntity->setTipofiltra($this->input->post('tipofiltra'));
     
        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'tipofiltra' => $this->input->post('tipofiltra'),
            
        );
        
    return $this->db->insert('filtrareconhecimento', $data);
    }
    //put your code here
}