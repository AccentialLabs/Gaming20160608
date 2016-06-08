<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Acoes extends CI_Controller {
    //put your code here
   
   /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('empresa_model');
        $this->load->model('objetos_model');
        $this->load->model('equipes_model');
        $this->load->model('acoes_model'); //esse  codigo é da tela  (cadastrar acao)
        $this->load->model('acoestable_model');//esse codigo é da tabela
        $this->load->model('periodofiltra_model'); //codigo da tela acoes é a parte da filtragem!.
        
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function listaAcoes(){
    
        $data['acoes'] = $this->acoes_model->get_acoes();
         //$data['acoestable'] = $this->acoestable_model->get_acoestable(); //essaaaaa tela aqui!!!
         //$data['periodofiltra'] = $this->periodofiltra_model->get_periodofiltra();
                                  
        $this->load->view('templates/header');
        $this->load->view('acoes/listaAcoes',$data); 
    }
    
     public function cadastrarAcoes(){

         $data['objetos'] = $this->objetos_model->get_objetos();
         $data['equipes'] = $this->equipes_model->get_equipes();
         $data['acoes'] = $this->acoes_model->get_acoes();
           
        $this->load->view('templates/header');
        $this->load->view('acoes/cadastrarAcoes',$data);
    }  
    
      public function createAcoes(){
        $this->acoestable_model->insert_acoestable();
        $this->periodofiltra_model->insert_periodofiltra();
      echo "sucesso";
    }  
    
     /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusAcao() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('acoes', $data)) {
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
    public function deleteAcao() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('acoes', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

} 