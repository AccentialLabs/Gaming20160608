<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ganharpremio_Entity
 *
 * @author Raphael Pizzo
 */
class GanharpremioEntity {
    //put your code here
    
    private $id;
    private $catalogopremio;
    private $tipofiltra;
    
    function getId() {
        return $this->id;
    }

    function getCatalogopremio() {
        return $this->catalogopremio;
    }

    function getTipofiltra() {
        return $this->tipofiltra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCatalogopremio($catalogopremio) {
        $this->catalogopremio = $catalogopremio;
    }

    function setTipofiltra($tipofiltra) {
        $this->tipofiltra = $tipofiltra;
    }
}