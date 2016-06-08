<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonagensEntity
 *
 * @author Raphael Pizzo
 */
class PersonagensEntity {
    
    private $id;
    private $nome;
    private $quantidademaxima;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getQuantidademaxima() {
        return $this->quantidademaxima;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setQuantidademaxima($quantidademaxima) {
        $this->quantidademaxima = $quantidademaxima;
    }
    //put your code here
}
