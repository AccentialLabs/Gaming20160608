<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedesocialEntity
 *
 * @author Raphael Pizzo
 */

class RedesocialEntity {
    //put your code here
    
    private $id;
    private $empresa_id;
    private $datacadastro;
    
    function getId() {
        return $this->id;
    }

    function getEmpresa_id() {
        return $this->empresa;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmpresa_id($empresa_id) {
        $this->empresa_id = $empresa_id;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }
}