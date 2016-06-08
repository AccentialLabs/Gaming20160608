<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioGestor_model
 *
 * @author user
 */
class Usuariogestor_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_usuariosgestores($slug = FALSE) {
        if ($slug === FALSE) {
            // $query = $this->db->get('estado');
            $query = $this->db->select('*')
                    ->from('usuariogestor')
                    ->join('usuariotb', 'usuariotb.id = usuariogestor.usuario_id', 'inner')
                    ->get();

            return $query->result_array();
        }

        $query = $this->db->select('*')
                ->from('usuariogestor')
                ->join('usuariotb', 'usuariotb.id = usuariogestor.usuario_id', 'inner')
                ->where('usuariogestor.id', $slug)
                ->get();


        $usuariogestorEntity = new UsuariogestorEntity();

        return $query->row_array();
    }

    public function insert_usuariogestor($slug) {

        $query = $this->db->select('*')
                ->from('usuariogestor')
                ->where('usuariogestor.usuario_id', $slug)
                ->get();

        if ($query->row_array()) {

            $usuariogestor = $query->row_array();
            $this->db->where('id', $usuariogestor['id']);
            $this->db->update('usuariogestor', array('status' => 1));

            echo "sucesso";
        } else {

            $data['usuario_id'] = $slug;
            $data['status'] = 1;

            $this->db->insert('usuariogestor', $data);
            echo "sucesso";
        }
    }

}
