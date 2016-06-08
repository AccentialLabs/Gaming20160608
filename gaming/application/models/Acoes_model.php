<?php
include("/../entities/AcoesEntity.php");
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

class Acoes_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_acoes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('acoes');
            return $query->result_array();
        }

        $query = $this->db->get_where('acoes', array('id' => $slug));
        
        
        $acoesEntity = new AcoesEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_acoes(){
        $this->load->helper('url');
        
        $acoesEntity = new AcoesEntity();
        $acoesEntity->setAcoes($this->input->post('acoes'));
        $acoesEntity->setStatus($this->input->post('status'));
        $acoesEntity->setDatainicio($this->input->post('datainicio'));
        $acoesEntity->setDatatermino($this->input->post('datatermino'));
        $acoesEntity->setHorainicio($this->input->post('horainicio'));
        $acoesEntity->setHoratermino($this->input->post('horatermino'));
        $acoesEntity->setSelecobjetos($this->input->post('selecobjetos'));
        $acoesEntity->setObjetocategoria($this->input->post('objetocategoria'));
        $acoesEntity->setModspacks($this->input->post('modspacks'));
        $acoesEntity->setSeleccategoria($this->input->post('seleccategoria'));
        $acoesEntity->setSelecmod($this->input->post('selecmod'));
        $acoesEntity->setQuantidadevezes($this->input->post('quantidadevezes'));
        $acoesEntity->setTotalvezes($this->input->post('totalvezes'));
        $acoesEntity->setFrequencia($this->input->post('frequencia'));
        $acoesEntity->setCadahora($this->input->post('cadahora'));
        $acoesEntity->setTodousuario($this->input->post('todousuario'));
        $acoesEntity->setSomenteequipe($this->input->post('somenteequipe'));
        $acoesEntity->setObrigatorio($this->input->post('obrigatorio'));
        $acoesEntity->setDefinirmanualmente($this->input->post('definirmanualmente'));
        $acoesEntity->setDicatela($this->input->post('dicatela'));
        $acoesEntity->setTextlog($this->input->post('textlog'));

        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'acoes' => $this->input->post('acoes'),
            'status' => $this->input->post('status'),
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'selecobjetos' => $this->input->post('selecobjetos'),
            'objetocategoria' => $this->input->post('objetocategoria'),
            'objetocategoria' => $this->input->post('objetocategoria'),
            'modspacks' => $this->input->post('modspacks'),
            'seleccategoria' => $this->input->post('seleccategoria'),
            'selecmod' => $this->input->post('selecmod'),
            'quantidadevezes' => $this->input->post('quantidadevezes'),
            'totalvezes' => $this->input->post('totalvezes'),
            'frequencia' => $this->input->post('frequencia'),
            'cadahora' => $this->input->post('cadahora'),
            'todousuario' => $this->input->post('todousuario'),
            'somenteequipe' => $this->input->post('somenteequipe'),
            'obrigatorio' => $this->input->post('obrigatorio'),
            'definirmanualmente' => $this->input->post('definirmanualmente'),
            'dicatela' => $this->input->post('dicatela'),
            'textlog' => $this->input->post('textlog')
        );
        
    return $this->db->insert('acoes', $data);
    }
    //put your code here
}