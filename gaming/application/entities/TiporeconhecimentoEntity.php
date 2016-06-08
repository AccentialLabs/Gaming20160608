<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TiporeconhecimentoEntity
 *
 * @author Raphael Pizzo
 */
class TiporeconhecimentoEntity {
    //put your code here
    private $id;
    private $tipo;
    private $conquista;
    private $modoafericao;
    private $quantidadeponto;
    private $reconhecimento;
    private $bagde;
    private $parabens;
    private $conteudodestravado;
    private $premiacao;
    private $pontosextras;
    private $textologin;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getConquista() {
        return $this->conquista;
    }

    function getModoafericao() {
        return $this->modoafericao;
    }

    function getQuantidadeponto() {
        return $this->quantidadeponto;
    }

    function getReconhecimento() {
        return $this->reconhecimento;
    }

    function getbadge() {
        return $this->badge;
    }

    function getParabens() {
        return $this->parabens;
    }

    function getConteudodestravado() {
        return $this->conteudodestravado;
    }

    function getPremiacao() {
        return $this->premiacao;
    }

    function getPontosextras() {
        return $this->pontosextras;
    }

    function getTextologin() {
        return $this->textologin;
    }
     function getStatus() {
        return $this->status;
    }
    
    

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setConquista($conquista) {
        $this->conquista = $conquista;
    }

    function setModoafericao($modoafericao) {
        $this->modoafericao = $modoafericao;
    }

    function setQuantidadeponto($quantidadeponto) {
        $this->quantidadeponto = $quantidadeponto;
    }

    function setReconhecimento($reconhecimento) {
        $this->reconhecimento = $reconhecimento;
    }

    function setBadge($badge) {
        $this->badge = $badge;
    }

    function setParabens($parabens) {
        $this->parabens = $parabens;
    }

    function setConteudodestravado($conteudodestravado) {
        $this->conteudodestravado = $conteudodestravado;
    }

    function setPremiacao($premiacao) {
        $this->premiacao = $premiacao;
    }

    function setPontosextras($pontosextras) {
        $this->pontosextras = $pontosextras;
    }

    function setTextologin($textologin) {
        $this->textologin = $textologin;
    }

 function setStatus($status) {
        $this->status = $status;
    }
   
}
