<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RealizacoestabEntity
 *
 * @author Raphael Pizzo
 */
class RealizacoestabEntity {
    //put your code here
    
    private $id;
    private $realizacoes;
    private $dataaquisicao;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getRealizacoes() {
        return $this->realizacoes;
    }

    function getDataaquisicao() {
        return $this->dataaquisicao;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRealizacoes($realizacoes) {
        $this->realizacoes = $realizacoes;
    }

    function setDataaquisicao($dataaquisicao) {
        $this->dataaquisicao = $dataaquisicao;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}
