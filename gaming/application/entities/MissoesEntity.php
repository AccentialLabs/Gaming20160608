<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MissoesEntity
 *
 * @author Raphael Pizzo
 */
class MissoesEntity {
    //put your code here
    
    private $id;
    private $missao;
    private $datainicio;
    private $datatermino;
    private $horainicio;
    private $horatermino;
    private $status;
    private $usuariojogadores;
    private $somenteequipe;
    private $manualmente;
    private $dicatela;
    private $msgparabens;
    private $textlog;
    
    function getId() {
        return $this->id;
    }

    function getMissao() {
        return $this->missao;
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

    function getStatus() {
        return $this->status;
    }

    function getUsuariojogadores() {
        return $this->usuariojogadores;
    }

    function getSomenteequipe() {
        return $this->somenteequipe;
    }

    function getManualmente() {
        return $this->manualmente;
    }

    function getDicatela() {
        return $this->dicatela;
    }

    function getMsgparabens() {
        return $this->msgparabens;
    }

    function getTextlog() {
        return $this->textlog;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMissao($missao) {
        $this->missao = $missao;
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

    function setStatus($status) {
        $this->status = $status;
    }

    function setUsuariojogadores($usuariojogadores) {
        $this->usuariojogadores = $usuariojogadores;
    }

    function setSomenteequipe($somenteequipe) {
        $this->somenteequipe = $somenteequipe;
    }

    function setManualmente($manualmente) {
        $this->manualmente = $manualmente;
    }

    function setDicatela($dicatela) {
        $this->dicatela = $dicatela;
    }

    function setMsgparabens($msgparabens) {
        $this->msgparabens = $msgparabens;
    }

    function setTextlog($textlog) {
        $this->textlog = $textlog;
    }

}