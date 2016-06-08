<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AcoesEntity
 *
 * @author Raphael Pizzo
 */
class AcoesEntity {
    //put your code here
    
    private $id;
    private $acoes;
    private $status;
    private $datainicio;
    private $datatermino;
    private $horainicio;
    private $horatermino;
    private $selecobjetos;
    private $objetocategoria;
    private $modspacks;
    private $seleccategoria;
    private $selecmod;
    private $quantidadevezes;
    private $totalvezes;
    private $frequencia;
    private $cadahora;
    private $todousuario;
    private $somenteequipe;
    private $obrigatorio;
    private $definirmanualmente;
    private $dicatela;
    private $textlog;
    
    function getId() {
        return $this->id;
    }

    function getAcoes() {
        return $this->acoes;
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

    function getSelecobjetos() {
        return $this->selecobjetos;
    }

    function getObjetocategoria() {
        return $this->objetocategoria;
    }

    function getModspacks() {
        return $this->modspacks;
    }

    function getSeleccategoria() {
        return $this->seleccategoria;
    }

    function getSelecmod() {
        return $this->selecmod;
    }

    function getQuantidadevezes() {
        return $this->quantidadevezes;
    }

    function getTotalvezes() {
        return $this->totalvezes;
    }

    function getFrequencia() {
        return $this->frequencia;
    }

    function getCadahora() {
        return $this->cadahora;
    }

    function getTodousuario() {
        return $this->todousuario;
    }

    function getSomenteequipe() {
        return $this->somenteequipe;
    }

    function getObrigatorio() {
        return $this->obrigatorio;
    }

    function getDefinirmanualmente() {
        return $this->definirmanualmente;
    }

    function getDicatela() {
        return $this->dicatela;
    }

    function getTextlog() {
        return $this->texlog;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAcoes($acoes) {
        $this->acoes = $acoes;
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

    function setSelecobjetos($selecobjetos) {
        $this->selecobjetos = $selecobjetos;
    }

    function setObjetocategoria($objetocategoria) {
        $this->objetocategoria = $objetocategoria;
    }

    function setModspacks($modspacks) {
        $this->modspacks = $modspacks;
    }

    function setSeleccategoria($seleccategoria) {
        $this->seleccategoria = $seleccategoria;
    }

    function setSelecmod($selecmod) {
        $this->selecmod = $selecmod;
    }

    function setQuantidadevezes($quantidadevezes) {
        $this->quantidadevezes = $quantidadevezes;
    }

    function setTotalvezes($totalvezes) {
        $this->totalvezes = $totalvezes;
    }

    function setFrequencia($frequencia) {
        $this->frequencia = $frequencia;
    }

    function setCadahora($cadahora) {
        $this->cadahora = $cadahora;
    }

    function setTodousuario($todousuario) {
        $this->todousuario = $todousuario;
    }

    function setSomenteequipe($somenteequipe) {
        $this->somenteequipe = $somenteequipe;
    }

    function setObrigatorio($obrigatorio) {
        $this->obrigatorio = $obrigatorio;
    }

    function setDefinirmanualmente($definirmanualmente) {
        $this->definirmanualmente = $definirmanualmente;
    }

    function setDicatela($dicatela) {
        $this->dicatela = $dicatela;
    }

    function setTextlog($textlog) {
        $this->textlog = $textlog;
    }
}
