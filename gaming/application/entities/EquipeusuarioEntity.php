<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipeusuarioEntity
 *
 * @author Raphael Pizzo
 */
class EquipeusuarioEntity {
    private $id;
    private $usuario_id;
    private $equipes_id;
    private $datacadastro;
    
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getEquipes_id() {
        return $this->equipes_id;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setEquipes_id($equipes_id) {
        $this->equipes_id = $equipes_id;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }


    
}
