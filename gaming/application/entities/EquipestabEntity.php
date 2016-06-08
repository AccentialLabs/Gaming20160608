<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipestabEntity
 *
 * @author Raphael Pizzo
 */
class EquipestabEntity {
    //put your code here
    
    private $id;
    private $equipes;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getEquipes() {
        return $this->equipes;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEquipes($equipes) {
        $this->equipes = $equipes;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}
