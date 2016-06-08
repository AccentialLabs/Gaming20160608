<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Jogadores extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('usuariotb_model'); //codigo para mostrar os dados na tabela
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['usuariotb'] = $this->usuariotb_model->get_usuariotb(); //codigo para mostrar os dados na tabela

        $this->load->view('templates/header');
        $this->load->view('jogadores/jogadores', $data);
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusJogador() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('usuariotb', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function deleteUser() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('usuariotb', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

}
