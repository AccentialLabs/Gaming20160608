<?php


//tela ACOES!!!!!!!



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PeriodofiltraEntity
 *
 * @author Raphael Pizzo
 */
class PeriodofiltraEntity {
    //put your code here
    
    private $id;
    private $periodofiltra;
    
    function getId() {
        return $this->id;
    }

    function getPeriodofiltra() {
        return $this->periodofiltra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPeriodofiltra($periodofiltra) {
        $this->periodofiltra = $periodofiltra;
    }
}