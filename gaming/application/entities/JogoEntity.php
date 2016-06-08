<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jogoEntity
 *
 * @author Raphael Pizzo
 */
class JogoEntity {

    private $id;
    private $status;
    private $modosimulacao;
    private $pontosexpiram;
    private $orientacao;
    private $regras;
    private $dataatualizacao;
    private $status2;
    
    function getId() {
        return $this->id;
    }

    function getStatus() {
        return $this->status;
    }

    function getModosimulacao() {
        return $this->modosimulacao;
    }

    function getPontosexpiram() {
        return $this->pontosexpiram;
    }

    function getorientacao() {
        return $this->orientacao;
    }

    function getRegras() {
        return $this->regras;
    }

    function getDataatualizacao() {
        return $this->dataatualizacao;
    }

    function getStatus2() {
        return $this->status2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setModosimulacao($modosimulacao) {
        $this->modosimulacao = $modosimulacao;
    }

    function setPontosexpiram($pontosexpiram) {
        $this->pontosexpiram = $pontosexpiram;
    }

    function setorientacao($orientacao) {
        $this->orientacao = $orientacao;
    }

    function setRegras($regras) {
        $this->regras = $regras;
    }

    function setDataatualizacao($dataatualizacao) {
        $this->dataatualizacao = $dataatualizacao;
    }

    function setStatus2($status2) {
        $this->status2 = $status2;
    }

}
