<?php

include("/../entities/UsuariotbEntity.php");
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
class Usuariotb_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function get_usuariotb($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('usuariotb');
            return $query->result_array();
        }

        $query = $this->db->get_where('usuariotb', array('id' => $slug));


        $usuariotbEntity = new UsuariotbEntity();


        return $query->row_array();
    }

    public function insert_usuariotb() {
        $this->load->helper('url');

        $usuariotbEntity = new UsuarioEntity();
        $usuariotbEntity->setNome($this->input->post('nome'));
        $usuariotbEntity->setCargo($this->input->post('cargo'));
        $usuariotbEntity->setDepartamento($this->input->post('departamento'));
        $usuariotbEntity->setUnidade($this->input->post('unidade'));
        $usuariotbEntity->setCidade($this->input->post('cidade'));
        $usuariotbEntity->setEstado($this->input->post('estado'));
        $usuariotbEntity->setPais($this->input->post('pais'));
        $usuariotbEntity->setStatus($this->input->post('status'));


        $alug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'cargo' => $this->input->post('cargo'),
            'departamento' => $this->input->post('departamento'),
            'unidade' => $this->input->post('unidade'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'pais' => $this->input->post('pais'),
            'status' => $this->input->post('status'),
        );

        return $this->db->insert('usuariotb', $data);
    }

    public function active_inactive_user() {
     
        $data['status'] = $this->input->post('status');
        
        $this->db->where('id', $this->input->post('id'));
        
        if($this->db->update('usuariotb', $data)){
            echo "sucesso";
        }else{
            echo "error";
        }
    }

    //put your code here
}