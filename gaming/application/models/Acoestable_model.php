<?php
include("/../entities/AcoestableEntity.php");
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

class Acoestable_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_acoestable($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('acoestable');
            return $query->result_array();
        }

        $query = $this->db->get_where('acoestable', array('id' => $slug));
        
        
        $acoestableEntity = new AcoestableEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_acoestable(){
        $this->load->helper('url');
        
        $acoestableEntity = new AcoestableEntity();
        $acoestableEntity->setAcoes($this->input->post('acoes'));
        $acoestableEntity->setVigencia($this->input->post('vigencia'));
        $acoestableEntity->setStatus($this->input->post('status'));
       

        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'acoes' => $this->input->post('acoes'),
            'vigencia' => $this->input->post('vigencia'),
            'status' => $this->input->post('status'),

        );
        
     return $this->db->insert('acoestable', $data);
    }
    //put your code here
}