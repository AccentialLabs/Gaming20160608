<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Premio extends CI_Controller {
    //put your code here
    
        public function __construct() {
        parent::__construct();
        $this->load->model('premio_model');
        $this->load->model('ganharpremio_model');
        $this->load->helper('url_helper');
    }
    // creio que os dadoa que estão inseridos na tabela são o formulário que prencho nas tels com as mesmas tabemas

    public function ganharPremio(){
    $data['premio'] = $this->premio_model->get_premio();  //linha de código da tabela
    $data['ganharpremio'] = $this->ganharpremio_model->get_ganharpremio();  //linha de código da do premio
        
        $this->load->view('templates/header');
        $this->load->view('premio/ganharPremio',$data);
    }
    
     public function cadastrarPremio(){
  
        $this->load->view('templates/header');
        $this->load->view('premio/cadastrarPremio');
    }
    
      public function createGanharpremio(){  //codigo que mostra a tala prêmio.
        $this->ganharpremio_model->insert_ganharpremio();
        echo"sucesso"; 
      }
      
        /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusPremios() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('premio', $data)) {
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
    public function deletePremios() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('premio', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
}