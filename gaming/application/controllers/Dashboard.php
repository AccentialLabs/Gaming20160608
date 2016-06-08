<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author Raphael Pizzo
 */
class Dashboard extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('jogador_model');
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function index(){
    
        //$data['cidades'] = $this->cidade_model->get_cidades(FALSE);
        print_r($data);
         $this->load->view('templates/header');
        $this->load->view('dashboard/index');
    } 
    
     public function principal(){
     $data['jogador'] = $this->jogador_model->get_jogador();
        $this->load->view('templates/header');
        $this->load->view('dashboard/principal',$data);
    }
}
