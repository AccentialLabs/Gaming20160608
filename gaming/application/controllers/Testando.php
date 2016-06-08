<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Testando
 *
 * @author Raphael Pizzo
 */
class Testando extends CI_Controller {
    //put your code here
    
     public function index() {
        
         $data ='';
        $this->load->view('templates/header', $data);
        $this->load->view('testando/index', $data);
      
    }
    
}
