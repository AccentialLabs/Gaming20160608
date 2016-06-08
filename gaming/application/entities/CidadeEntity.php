<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CidadeEntity
 *
 * @author Raphael Pizzo
 */
class CidadeEntity {
    //put your code here
    
    private $id;
    private $descricao;
    private $estado_id;
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEstado_id() {
        return $this->estado_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEstado_id($estado_id) {
        $this->estado_id = $estado_id;
    }
}