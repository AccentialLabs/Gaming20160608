<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReconhecimentoEntity
 *
 * @author Raphael Pizzo
 */
class ReconhecimentoEntity {
    //put your code here
    private $id;
    private $reconhecimento;
    private $status;
    private $tipo;
    private $modoafericao;
    
    function getReconhecimento() {
        return $this->reconhecimento;
    }

    function getStatus() {
        return $this->status;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getModoafericao() {
        return $this->modoafericao;
    }

    function setReconhecimento($reconhecimento) {
        $this->reconhecimento = $reconhecimento;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setModoafericao($modoafericao) {
        $this->modoafericao = $modoafericao;
    }
}