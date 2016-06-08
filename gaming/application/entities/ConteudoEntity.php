<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConteudoEntity
 *
 * @author Raphael Pizzo
 */
class ConteudoEntity {
    //put your code here
    
    private $id;
    private $nome;
    private $objeto;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getObjeto() {
        return $this->objeto;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setObjeto($objeto) {
        $this->objeto = $objeto;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}