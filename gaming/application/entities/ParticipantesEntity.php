<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParticipantesEntity
 *
 * @author Raphael Pizzo
 */
class ParticipantesEntity {
    //put your code here
    
    private $id;
    private $estesnaojogam;
    
    function getId() {
        return $this->id;
    }

    function getEstesnaojogam() {
        return $this->estesnaojogam;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstesnaojogam($estesnaojogam) {
        $this->estesnaojogam = $estesnaojogam;
    }
}
