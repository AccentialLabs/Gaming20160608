<?php
include("/../entities/ImportarfuncionariosEntity.php");
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
class Importarfuncionarios_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_importarfuncionarios($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('importarfuncionarios');
            return $query->result_array();
        }

        $query = $this->db->get_where('importarfuncionarios', array('id' => $slug));
        
        
        $importarfuncionariosEntity = new ImportarfuncionariosEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_importarfuncionarios(){
        $this->load->helper('url');
        
        $importarfuncionariosEntity = new ImportarfuncionariosEntity();
        $importarfuncionariosEntity->setDefinirequipes($this->input->post('defiirequipes'));
        $importarfuncionariosEntity->setCargo($this->input->post('cargo'));
        $importarfuncionariosEntity->setDepartamento($this->input->post('departamento'));
        $importarfuncionariosEntity->setUnidade($this->input->post('unidade'));
        $importarfuncionariosEntity->setCidade($this->input->post('cidade'));
        $importarfuncionariosEntity->setEstado($this->input->post('estado'));
        $importarfuncionariosEntity->setPais($this->input->post('pais'));
        $importarfuncionariosEntity->setGrupo($this->input->post('grupo'));
        $importarfuncionariosEntity->setCipa($this->input->post('cipa'));
        $importarfuncionariosEntity->setPlanilha($this->input->post('planilha'));
        
        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'definirequipes' => $this->input->post('definirequipes'),
            'cargo' => $this->input->post('cargo'),
            'departamento' => $this->input->post('departamento'),
            'unidade' => $this->input->post('unidade'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'pais' => $this->input->post('pais'),
            'grupo' => $this->input->post('grupo'),
            'cipa' => $this->input->post('cipa'),
            'planilha' => $this->input->post('planilha')
         
        );
        
    return $this->db->insert('importarfuncionarios', $data);
    }
    //put your code here
}