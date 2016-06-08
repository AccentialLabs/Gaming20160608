<?php

include("/../entities/MissoesEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Missoes_model
 *
 * @author Raphael Pizzo
 */
class Missoes_model extends CI_Model{
    //put your code here
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_missoes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('missoes');
            return $query->result_array();
        }

        $query = $this->db->get_where('missoes', array('id' => $slug));
        
        
        $missoesEntity = new MissoesEntity();
        
        return $query->row_array();
    }
    
    public function insert_missoes() {
        $this->load->helper('url');

        $missoesEntity = new MissoesEntity();
        $missoesEntity->setMissao($this->input->post('missao'));
        $missoesEntity->setDatainicio($this->input->post('datainicio'));
        $missoesEntity->setDatatermino($this->input->post('datatermino'));
        $missoesEntity->setHorainicio($this->input->post('horainicio'));
        $missoesEntity->setHoratermino($this->input->post('horatermino'));
        $missoesEntity->setStatus($this->input->post('status'));
        $missoesEntity->setUsuariojogadores($this->input->post('usuariojogadores'));
        $missoesEntity->setSomenteequipe($this->input->post('somenteequipe'));
        $missoesEntity->setManualmente($this->input->post('manualmente'));
        $missoesEntity->setDicatela($this->input->post('dicatela'));
        $missoesEntity->setMsgparabens($this->input->post('msgparabens'));
        $missoesEntity->setTextlog($this->input->post('textlog'));
 
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'missao' => $this->input->post('missao'),
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'status' => $this->input->post('status'),
            'usuariojogadores' => $this->input->post('usuariojogadores'),
            'somenteequipe' => $this->input->post('somenteequipe'),
            'manualmente' => $this->input->post('manualmente'),
            'dicatela' => $this->input->post('dicatela'),
            'msgparabens' => $this->input->post('msgparabens'),
            'textlog' => $this->input->post('textlog')
              
        );

        return $this->db->insert('missoes', $data);
    }
}