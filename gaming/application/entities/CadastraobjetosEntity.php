<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastrar_objetosEntity
 *
 * @author Raphael Pizzo
 */
class CadastraobjetosEntity { 
    //put your code here
    private $id;
    private $categoria;
    private $pergunta;
    private $respdescritiva;
    private $qtdcaracteres;
    private $qtdpontos;
    private $alternativas;
    private $respcorreta;
    private $numtentativas;
    private $limittempo;
    private $escala;
    private $valueminimo;
    private $incremento;
    private $valuefinal;
    private $pontmedio;
    private $pontescala;
    private $interacaofisicareal;
    private $resposta;
    private $pontos;
    private $habilitaqr;
    
    function getId() {
        return $this->id;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getPergunta() {
        return $this->pergunta;
    }

    function getRespdescritiva() {
        return $this->respdescritiva;
    }

    function getQtdcaracteres() {
        return $this->qtdcaracteres;
    }

    function getQtdpontos() {
        return $this->qtdpontos;
    }

    function getAlternativas() {
        return $this->alternativas;
    }

    function getRespcorreta() {
        return $this->respcorreta;
    }

    function getNumtentativas() {
        return $this->numtentativas;
    }

    function getLimittempo() {
        return $this->limittempo;
    }

    function getEscala() {
        return $this->escala;
    }

    function getValueminimo() {
        return $this->valueminimo;
    }

    function getIncremento() {
        return $this->incremento;
    }

    function getValuefinal() {
        return $this->valuefinal;
    }

    function getPontmedio() {
        return $this->pontmedio;
    }

    function getPontescala() {
        return $this->pontescala;
    }

    function getInteracaofisicareal() {
        return $this->interacaofisicareal;
    }

    function getResposta() {
        return $this->resposta;
    }

    function getPontos() {
        return $this->pontos;
    }

    function getHabilitaqr() {
        return $this->habilitaqr;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setPergunta($pergunta) {
        $this->pergunta = $pergunta;
    }

    function setRespdescritiva($respdescritiva) {
        $this->respdescritiva = $respdescritiva;
    }

    function setQtdcaracteres($qtdcaracteres) {
        $this->qtdcaracteres = $qtdcaracteres;
    }

    function setQtdpontos($qtdpontos) {
        $this->qtdpontos = $qtdpontos;
    }

    function setAlternativas($alternativas) {
        $this->alternativas = $alternativas;
    }

    function setRespcorreta($respcorreta) {
        $this->respcorreta = $respcorreta;
    }

    function setNumtentativas($numtentativas) {
        $this->numtentativas = $numtentativas;
    }

    function setLimittempo($limittempo) {
        $this->limittempo = $limittempo;
    }

    function setEscala($escala) {
        $this->escala = $escala;
    }

    function setValueminimo($valueminimo) {
        $this->valueminimo = $valueminimo;
    }

    function setIncremento($incremento) {
        $this->incremento = $incremento;
    }

    function setValuefinal($valuefinal) {
        $this->valuefinal = $valuefinal;
    }

    function setPontmedio($pontmedio) {
        $this->pontmedio = $pontmedio;
    }

    function setPontescala($pontescala) {
        $this->pontescala = $pontescala;
    }

    function setInteracaofisicareal($interacaofisicareal) {
        $this->interacaofisicareal = $interacaofisicareal;
    }

    function setResposta($resposta) {
        $this->resposta = $resposta;
    }

    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function setHabilitaqr($habilitaqr) {
        $this->habilitaqr = $habilitaqr;
    }
}