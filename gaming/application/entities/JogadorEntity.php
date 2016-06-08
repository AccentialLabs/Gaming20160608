<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorEntity
 *
 * @author Raphael Pizzo
 */
class JogadorEntity {
    //put your code here
    
    private $cod_cli;
    private $nome;
    private $sobrenome;
    private $posicao;
    private $jogador;
    
    function getCod_cli() {
        return $this->cod_cli;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getPosicao() {
        return $this->posicao;
    }

    function getJogador() {
        return $this->jogador;
    }

    function setCod_cli($cod_cli) {
        $this->cod_cli = $cod_cli;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    function setJogador($jogador) {
        $this->jogador = $jogador;
    }
}
