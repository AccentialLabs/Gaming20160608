<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Configuracoes extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {

        parent::__construct();
        $this->load->model('premio_model');
        /* $this->load->model('usuario_model'); */ /* Ao retirar essa linha de código, a tela configuracoes/cadastrar premio funciona */
        $this->load->model('conteudo_model');
        $this->load->model('objetos_model');
        $this->load->model('reconhecimento_model');
        $this->load->model('facilitadores_model');
        $this->load->model('empresa_model');
        $this->load->model('tipopremio_model');
        $this->load->model('tiporeconhecimento_model');
        $this->load->model('usuariogestor_model');
        $this->load->model('usuariotb_model');
        //aqui comeca a inserção dos dados das redes sociais
        $this->load->model('facebookempresa_model');
        //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
        //$this->load->model('twitterempresa_model');
        //$this->load->model('instagranempresa_model');  
        $this->load->model('jogo_model');

        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function dadosEmpresa() {

        $data['empresa'] = $this->empresa_model->get_empresa();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/dadosEmpresa');
    }

    public function cadastrarRedesociais() {
        $data['facebookempresa'] = $this->facebookempresa_model->get_facebookempresa();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/cadastrarRedesociais');
    }

    public function jogo() {

        $this->load->view('templates/header');
        $this->load->view('configuracoes/jogo');
    }

    public function usuariosGestores() {

        $data['usuarios'] = $this->usuariotb_model->get_usuariotb(); /* retirar o comentario da construct */
        //$data['tes'] = $this->usuariogestor_model->insert_usuariogestor(7);

        $this->load->view('templates/header');
        $this->load->view('configuracoes/usuariosGestores', $data);
    }
    
    public function ativarOuInativarUsGestores(){
        
        $id = $this->input->post('id');
        return $this->usuariogestor_model->insert_usuariogestor($id);
    }

    public function conteudo() {

        $data['conteudos'] = $this->conteudo_model->get_conteudo();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/conteudo', $data);
    }

    public function categoriaObjetos() {

        $data['objetos'] = $this->objetos_model->get_objetos();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/categoriaObjetos', $data);
    }

    public function reconhecimentos() {

        $data['reconhecimentos'] = $this->tiporeconhecimento_model->get_tiporeconhecimento();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/reconhecimentos', $data);
    }

    public function premios() {

        $data['premios'] = $this->tipopremio_model->get_tipopremio();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/premios', $data);
    }

    public function usuariosFacilitadores() {

        $data['facilitadores'] = $this->facilitadores_model->get_facilitadores();

        $this->load->view('templates/header');
        $this->load->view('configuracoes/usuariosFacilitadores', $data);
    }

    public function createPremio() { /* A tela (configurações/cadastrar premio) esta cadastrada nos (premios()),sendo essa tela de tipo-de-premios */
        /* ela devia estar na views (premio) (cadastrar-premio) */
        $this->premio_model->insert_premio();  /* Arrumando teria que mexer na viws na controller e até na model!, e levando esse trecho de código junto.! */
        echo "sucesso";
    }

    public function createEmpresa() {            //esse codigo é da tela Dados da empresa
        $this->empresa_model->insert_empresa();
        echo "sucesso";
    }

    public function createFacebook() {                //esse codigo é da tela Cadaatrar rede Sociais
        $this->facebookempresa_model->insert_facebookempresa();

        echo "sucesso";
    }

    //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
    // public function createTwitter(){
    //$this->twitterempresa_model->insert_twitterempresa(); 
    //echo "sucesso cadastro o Twitter";
    //}
    // public function createInstagran(){
    // $this->instagranempresa_model->insert_instagranempresa();
    // echo "sucesso o cadastro Instagran";
    // }

    public function createJogo() {  //codigo que mostra a tala Jogo.
        $this->jogo_model->insert_jogo();
        echo"sucesso";
    }

    
       /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function deleteConteudo() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('conteudo', $data)) {
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
    public function mudaStatusTipoPremio() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipopremio', $data)) {
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
    public function deleteTipoPremio() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipopremio', $data)) {
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
    public function mudaStatusUsuarioFacilitador() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('facilitadores', $data)) {
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
    public function deleteUsuarioFacilitador() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('facilitadores', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
    
    /**
     * INSERINDO USUÁRIOS FACILITADORES
     */
    public function insertUsuarioFacilitador(){
        
        $this->facilitadores_model->insert_facilitadores();
        return "sucesso";
    }
    
      /**
     * INSERINDO TIPO PRÊMIO
     */
    public function insertTipoPremio(){
        
        $this->tipopremio_model->insert_tipopremio();
        return "sucesso";
    }
    
}
