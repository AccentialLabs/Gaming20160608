<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PremioEntity
 *
 * @author Raphael Pizzo
 */
class PremioEntity {
    private $id;
    private $nome;
    private $tipopremio_id;
    private $descricao;
    private $fotourl;
    private $site;
    private $linkadicional;
    private $informacoesadicionais;
    private $intrucoes;
    private $quantidadecontrolada;
    private $quantidadepremios;
    private $quantidadeatualpremios;
    private $disponibilidade;
    private $quantidadedisponibilizadade;
    private $datacadastro;
    private $status;
    private $catalogopremio;
    private $tipofiltra;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipopremio_id() {
        return $this->tipopremio_id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getFotourl() {
        return $this->fotourl;
    }

    function getSite() {
        return $this->site;
    }

    function getLinkadicional() {
        return $this->linkadicional;
    }

    function getInformacoesadicionais() {
        return $this->informacoesadicionais;
    }

    function getIntrucoes() {
        return $this->intrucoes;
    }

    function getQuantidadecontrolada() {
        return $this->quantidadecontrolada;
    }

    function getQuantidadepremios() {
        return $this->quantidadepremios;
    }

    function getQuantidadeatualpremios() {
        return $this->quantidadeatualpremios;
    }

    function getDisponibilidade() {
        return $this->disponibilidade;
    }

    function getQuantidadedisponibilizadade() {
        return $this->quantidadedisponibilizadade;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function getStatus() {
        return $this->status;
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

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipopremio_id($tipopremio_id) {
        $this->tipopremio_id = $tipopremio_id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setFotourl($fotourl) {
        $this->fotourl = $fotourl;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setLinkadicional($linkadicional) {
        $this->linkadicional = $linkadicional;
    }

    function setInformacoesadicionais($informacoesadicionais) {
        $this->informacoesadicionais = $informacoesadicionais;
    }

    function setIntrucoes($intrucoes) {
        $this->intrucoes = $intrucoes;
    }

    function setQuantidadecontrolada($quantidadecontrolada) {
        $this->quantidadecontrolada = $quantidadecontrolada;
    }

    function setQuantidadepremios($quantidadepremios) {
        $this->quantidadepremios = $quantidadepremios;
    }

    function setQuantidadeatualpremios($quantidadeatualpremios) {
        $this->quantidadeatualpremios = $quantidadeatualpremios;
    }

    function setDisponibilidade($disponibilidade) {
        $this->disponibilidade = $disponibilidade;
    }

    function setQuantidadedisponibilizadade($quantidadedisponibilizadade) {
        $this->quantidadedisponibilizadade = $quantidadedisponibilizadade;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCatalogopremio($catalogopremio) {
        $this->catalogopremio = $catalogopremio;
    }

    function setTipofiltra($tipofiltra) {
        $this->tipofiltra = $tipofiltra;
    }
}