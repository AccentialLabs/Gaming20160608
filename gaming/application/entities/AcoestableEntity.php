<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AcoestableEntity
 *
 * @author Raphael Pizzo
 */
class AcoestableEntity {
    //put your code here
    
    private $acoes;
    private $vigencia;
    private $status;
    
    function getAcoes() {
        return $this->acoes;
    }

    function getVigencia() {
        return $this->vigencia;
    }

    function getStatus() {
        return $this->status;
    }

    function setAcoes($acoes) {
        $this->acoes = $acoes;
    }

    function setVigencia($vigencia) {
        $this->vigencia = $vigencia;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}