<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DesafioEntity
 *
 * @author Raphael Pizzo
 */
class DesafioEntity {
    //put your code here  
    
    private $id;
    private $nome;
    private $status;
    private $datainicio;
    private $datatermino;
    private $horainicio;
    private $horatermino;
    private $selecdesafianteequipe;
    private $selecfuncionario;
    private $selecequipe;
    private $desafiantetodos;
    private $definirmanualmente;
    private $identificada;
    private $anonima;
    private $desafiadoescolhe;
    private $obrigatorio;
    private $pontuacaoextra;
    private $perde;
    private $ganha;
    private $dicatela;
    
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getStatus() {
        return $this->status;
    }

    function getDatainicio() {
        return $this->datainicio;
    }

    function getDatatermino() {
        return $this->datatermino;
    }

    function getHorainicio() {
        return $this->horainicio;
    }

    function getHoratermino() {
        return $this->horatermino;
    }

    function getSelecdesafianteequipe() {
        return $this->selecdesafianteequipe;
    }

    function getSelecfuncionario() {
        return $this->selecfuncionario;
    }

    function getSelecequipe() {
        return $this->selecequipe;
    }

    function getDesafiantetodos() {
        return $this->desafiantetodos;
    }

    function getDefinirmanualmente() {
        return $this->definirmanualmente;
    }

    function getIdentificada() {
        return $this->identificada;
    }

    function getAnonima() {
        return $this->anonima;
    }

    function getDesafiadoescolhe() {
        return $this->desafiadoescolhe;
    }

    function getObrigatorio() {
        return $this->obrigatorio;
    }

    function getPontuacaoextra() {
        return $this->pontuacaoextra;
    }

    function getPerde() {
        return $this->perde;
    }

    function getGanha() {
        return $this->ganha;
    }

    function getDicatela() {
        return $this->dicatela;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDatainicio($datainicio) {
        $this->datainicio = $datainicio;
    }

    function setDatatermino($datatermino) {
        $this->datatermino = $datatermino;
    }

    function setHorainicio($horainicio) {
        $this->horainicio = $horainicio;
    }

    function setHoratermino($horatermino) {
        $this->horatermino = $horatermino;
    }

    function setSelecdesafianteequipe($selecdesafianteequipe) {
        $this->selecdesafianteequipe = $selecdesafianteequipe;
    }

    function setSelecfuncionario($selecfuncionario) {
        $this->selecfuncionario = $selecfuncionario;
    }

    function setSelecequipe($selecequipe) {
        $this->selecequipe = $selecequipe;
    }

    function setDesafiantetodos($desafiantetodos) {
        $this->desafiantetodos = $desafiantetodos;
    }

    function setDefinirmanualmente($definirmanualmente) {
        $this->definirmanualmente = $definirmanualmente;
    }

    function setIdentificada($identificada) {
        $this->identificada = $identificada;
    }

    function setAnonima($anonima) {
        $this->anonima = $anonima;
    }

    function setDesafiadoescolhe($desafiadoescolhe) {
        $this->desafiadoescolhe = $desafiadoescolhe;
    }

    function setObrigatorio($obrigatorio) {
        $this->obrigatorio = $obrigatorio;
    }

    function setPontuacaoextra($pontuacaoextra) {
        $this->pontuacaoextra = $pontuacaoextra;
    }

    function setPerde($perde) {
        $this->perde = $perde;
    }

    function setGanha($ganha) {
        $this->ganha = $ganha;
    }

    function setDicatela($dicatela) {
        $this->dicatela = $dicatela;
    }

}