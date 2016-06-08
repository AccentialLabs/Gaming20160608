<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailEntity
 *
 * @author Raphael Pizzo
 */
class EmailEntity {
    private $id;
    private $destinatario;
    private $corpo;
    private $assunto;
    private $remetente;
    private $enviado;
    private $datagravacao;
    private $dataenvio;
    
    function getId() {
        return $this->id;
    }

    function getDestinatario() {
        return $this->destinatario;
    }

    function getCorpo() {
        return $this->corpo;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function getRemetente() {
        return $this->remetente;
    }

    function getEnviado() {
        return $this->enviado;
    }

    function getDatagravacao() {
        return $this->datagravacao;
    }

    function getDataenvio() {
        return $this->dataenvio;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    function setCorpo($corpo) {
        $this->corpo = $corpo;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setRemetente($remetente) {
        $this->remetente = $remetente;
    }

    function setEnviado($enviado) {
        $this->enviado = $enviado;
    }

    function setDatagravacao($datagravacao) {
        $this->datagravacao = $datagravacao;
    }

    function setDataenvio($dataenvio) {
        $this->dataenvio = $dataenvio;
    }
}
