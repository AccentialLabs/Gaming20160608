<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioEntity
 *
 * @author Raphael Pizzo
 */
class UsuariotbEntity {
    //put your code here
    private $id;
    private $nome;
    private $cargo;
    private $departamento;
    private $unidade;
    private $cidade;
    private $estado;
    private $pais;
    private $status;
   
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getUnidade() {
        return $this->unidade;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getPais() {
        return $this->pais;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    function setUnidade($unidade) {
        $this->unidade = $unidade;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
