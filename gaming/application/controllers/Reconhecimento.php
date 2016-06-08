<?php

//PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Reconhecimento extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('reconhecimento_model');
        $this->load->model('tiporeconhecimento_model');
        $this->load->model('filtrareconhecimento_model');
         
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function cadastrarConquista(){
    
         $data['tiporeconhecimento'] = $this->tiporeconhecimento_model->get_tiporeconhecimento();
        
         $this->load->view('templates/header'); 
         $this->load->view('reconhecimento/cadastrarConquista',$data);
    }  
   
     public function reconhecimentoConquista(){
     //nesse codigo só precisei colocar a (model do reconhecimento) para mostrar a tabela ma tela.
        $data['reconhecimento'] = $this->reconhecimento_model->get_reconhecimento();
         
        $this->load->view('templates/header');
        $this->load->view('reconhecimento/reconhecimentoConquista',$data);
    } 

     public function createConquista() {
        $this->tiporeconhecimento_model->insert_tiporeconhecimento();
        echo "sucesso";
    }
   
     public function createFiltrareconhecimmento() { 
        $this->filtrareconhecimento_model->insert_filtrareconhecimento();
        echo "sucesso"; //codigo apenas para mostrar na tela Reconhecimento/conquista a partede opções de filtrar
    }
    
     /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusReconhecimento() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
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
    public function deleteReconhecimentos() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
}  