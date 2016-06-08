<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Telalogin extends CI_Controller {
    //put your code here
    
      public function __construct() {
        parent::__construct();
        $this->load->model('empresa_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){
        
         $this->load->view('templates/header');
        $this->load->view('telalogin/index');
    }
    
    public function validaLogin() {
        $email=  $this->input->post('emailKey');
        $senha= md5($this->input->post('passwordKey'));
        $retorno=$this->empresa_model->empresalogin($senha, $email);
        
        if(empty($retorno)){
            $retorno['requisition_status'] = "erro";
        }else{
            $retorno['requisition_status'] = "sucesso";
            
            $this->load->library('session');
            $this->session->set_userdata(array(
                            'empresaLogada' => $retorno));
        }
        
        $js_array = json_encode($retorno);
        print_r($js_array);
        
    }
}
