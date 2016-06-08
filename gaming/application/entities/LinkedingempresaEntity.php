<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LinkedingempresaEntity
 *
 * @author Raphael Pizzo
 */
class LinkedingempresaEntity {
    
    private $id;
    private $descricao;
    private $empresa_id;
    private $pubicaauto;
    private $datacadastro;
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEmpresa_id() {
        return $this->empresa_id;
    }

    function getPubicaauto() {
        return $this->pubicaauto;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEmpresa_id($empresa_id) {
        $this->empresa_id = $empresa_id;
    }

    function setPubicaauto($pubicaauto) {
        $this->pubicaauto = $pubicaauto;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

}
