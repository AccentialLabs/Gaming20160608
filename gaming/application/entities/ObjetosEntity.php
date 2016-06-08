<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjetosEntity
 *
 * @author Raphael Pizzo
 */
class ObjetosEntity {
    //put your code here
    
    private $id;
    private $objeto;
    private $categoria;
    private $obrigacao;
    private $status;
    private $ativo;
    private $perguntas;
    private $pontos;
    private $personagem;
    private $ordem;

    function getId() {
        return $this->id;
    }

    function getObjeto() {
        return $this->objeto;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getObrigacao() {
        return $this->obrigacao;
    }

    function getStatus() {
        return $this->status;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getPerguntas() {
        return $this->perguntas;
    }

    function getPontos() {
        return $this->pontos;
    }

    function getPersonagem() {
        return $this->personagem;
    }

    function getOrdem() {
        return $this->ordem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setObjeto($objeto) {
        $this->objeto = $objeto;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setObrigacao($obrigacao) {
        $this->obrigacao = $obrigacao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setPerguntas($perguntas) {
        $this->perguntas = $perguntas;
    }

    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function setPersonagem($personagem) {
        $this->personagem = $personagem;
    }

    function setOrdem($ordem) {
        $this->ordem = $ordem;
    }

}