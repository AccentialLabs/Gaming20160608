<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Primeiramente abrimos a controller que é essa , e depois a model Equipes para vermos o que tem nela e declarar nessa tela*/


class Equipes extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('equipes_model');
        $this->load->model('equipestab_model');
         
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function cadastrarEquipes(){
        
        $data['equipes'] = $this->equipes_model->get_equipes();  //codigo dos dados da tela
       
         $this->load->view('templates/header');
        $this->load->view('equipes/cadastrarEquipes',$data);
    } 
    
     public function listaEquipes(){
     $data['equipes'] = $this->equipes_model->get_equipes(); /*como segunda coisa a se fazer nessa tela se acrenta nessa linha mudando o nome *equipes**/
     $data['equipestab'] = $this->equipestab_model->get_equipestab(); 
      
         $this->load->view('templates/header');
        $this->load->view('equipes/listaEquipes',$data); /*fazendo a parte final desta pagina acrescentamos o ,$data*/
    }  
    
     /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusEquipes() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('equipestab', $data)) {
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
    public function deleteEquipes() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('equipestab', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
}