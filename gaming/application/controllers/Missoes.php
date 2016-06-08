<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Missoes extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('missoes_model');
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function cadastrarMissoes(){
 
        $data['missoes'] = $this->missoes_model->get_missoes();
        
        $this->load->view('templates/header');
        $this->load->view('missoes/cadastrarMissoes',$data);
    }
 
     public function listaMissoes(){
         
    $data['missoes'] = $this->missoes_model->get_missoes();
    
         $this->load->view('templates/header');
        $this->load->view('missoes/listaMissoes',$data);
    }
    
     public function createMissoes(){
        $this->missoes_model->insert_missoes();
        echo "sucesso";
    }
    
       /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusMissoes() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('missoes', $data)) {
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
    public function deleteMissoes() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('missoes', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
}