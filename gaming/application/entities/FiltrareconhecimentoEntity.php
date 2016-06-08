<?php

//PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS.

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filtrareconhecimento
 *
 * @author Raphael Pizzo
 */
class FiltrareconhecimentoEntity {
    //put your code here
    private $id;
    private $tipofiltra;
    
    function getId() {
        return $this->id;
    }

    function getTipofiltra() {
        return $this->tipofiltra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipofiltra($tipofiltra) {
        $this->tipofiltra = $tipofiltra;
    }

}