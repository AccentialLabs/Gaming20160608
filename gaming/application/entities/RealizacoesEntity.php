<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RealizacoesEntity
 *
 * @author Raphael Pizzo
 */
class RealizacoesEntity {
    private $id;
    private $dataaquisicao;
    private $nome;
    private $cargo;
    private $departamento;
    private $unidade;
    private $cidade;
    private $estado;
    private $pais;
    private $telefone;
    private $ramal;
    private $celular;
    private $email;
    private $sexo;

    function getId() {
        return $this->id;
    }

    function getDataaquisicao() {
        return $this->dataaquisicao;
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

    function getTelefone() {
        return $this->telefone;
    }

    function getRamal() {
        return $this->ramal;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDataaquisicao($dataaquisicao) {
        $this->dataaquisicao = $dataaquisicao;
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

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setRamal($ramal) {
        $this->ramal = $ramal;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

              //put your code here
}
