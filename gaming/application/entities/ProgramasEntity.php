<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Description of ProgramasEntity
 *
 * @author Raphael Pizzo
 */
class ProgramasEntity {
    //put your code here
    
    private $id;
    private $nome;
    private $status;
    private $datainicio;
    private $datatermino;
    private $horainicio;
    private $horatermino;
    private $objetivo; 
    private $localmapa;
    private $rodadasvezes;
    private $rodadasdiferentes;
    private $automaticarodada;
    private $facilitadorrodada;
    private $intervalo;
    private $gestor_id;
    private $facilitador_id;
    private $pontuacao;
    private $scoregeral;
    private $premiacaoindividual;
    private $premiacaoequipe;
    private $premiacaotodos;
    private $mensagemparabens;
    private $pontosextras;
    private $premiaequipes; 
    private $gestorrodada;
    private $selecionepremio;
    
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

    function getObjetivo() {
        return $this->objetivo;
    }

    function getLocalmapa() {
        return $this->localmapa;
    }

    function getRodadasvezes() {
        return $this->rodadasvezes;
    }

    function getRodadasdiferentes() {
        return $this->rodadasdiferentes;
    }

    function getAutomaticarodada() {
        return $this->automaticarodada;
    }

    function getFacilitadorrodada() {
        return $this->facilitadorrodada;
    }

    function getIntervalo() {
        return $this->intervalo;
    }

    function getGestor_id() {
        return $this->gestor_id;
    }

    function getFacilitador_id() {
        return $this->facilitador_id;
    }

    function getPontuacao() {
        return $this->pontuacao;
    }

    function getScoregeral() {
        return $this->scoregeral;
    }

    function getPremiacaoindividual() {
        return $this->premiacaoindividual;
    }

    function getPremiacaoequipe() {
        return $this->premiacaoequipe;
    }

    function getPremiacaotodos() {
        return $this->premiacaotodos;
    }

    function getMensagemparabens() {
        return $this->mensagemparabens;
    }

    function getPontosextras() {
        return $this->pontosextras;
    }

    function getPremiaequipes() {
        return $this->premiaequipes;
    }

    function getGestorrodada() {
        return $this->gestorrodada;
    }

    function getSelecionepremio() {
        return $this->selecionepremio;
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

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    function setLocalmapa($localmapa) {
        $this->localmapa = $localmapa;
    }

    function setRodadasvezes($rodadasvezes) {
        $this->rodadasvezes = $rodadasvezes;
    }

    function setRodadasdiferentes($rodadasdiferentes) {
        $this->rodadasdiferentes = $rodadasdiferentes;
    }

    function setAutomaticarodada($automaticarodada) {
        $this->automaticarodada = $automaticarodada;
    }

    function setFacilitadorrodada($facilitadorrodada) {
        $this->facilitadorrodada = $facilitadorrodada;
    }

    function setIntervalo($intervalo) {
        $this->intervalo = $intervalo;
    }

    function setGestor_id($gestor_id) {
        $this->gestor_id = $gestor_id;
    }

    function setFacilitador_id($facilitador_id) {
        $this->facilitador_id = $facilitador_id;
    }

    function setPontuacao($pontuacao) {
        $this->pontuacao = $pontuacao;
    }

    function setScoregeral($scoregeral) {
        $this->scoregeral = $scoregeral;
    }

    function setPremiacaoindividual($premiacaoindividual) {
        $this->premiacaoindividual = $premiacaoindividual;
    }

    function setPremiacaoequipe($premiacaoequipe) {
        $this->premiacaoequipe = $premiacaoequipe;
    }

    function setPremiacaotodos($premiacaotodos) {
        $this->premiacaotodos = $premiacaotodos;
    }

    function setMensagemparabens($mensagemparabens) {
        $this->mensagemparabens = $mensagemparabens;
    }

    function setPontosextras($pontosextras) {
        $this->pontosextras = $pontosextras;
    }

    function setPremiaequipes($premiaequipes) {
        $this->premiaequipes = $premiaequipes;
    }

    function setGestorrodada($gestorrodada) {
        $this->gestorrodada = $gestorrodada;
    }

    function setSelecionepremio($selecionepremio) {
        $this->selecionepremio = $selecionepremio;
    }
}