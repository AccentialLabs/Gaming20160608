<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImportarfuncionariosEntity
 *
 * @author Raphael Pizzo
 */
class ImportarfuncionariosEntity {
    //put your code here
    private $id;
    private $definirequipes;
    private $cargo;
    private $departamento;
    private $unidade;
    private $cidade;
    private $estado;
    private $pais;
    private $grupo;
    private $cipa;
    private $planilha;
    
    function getId() {
        return $this->id;
    }

    function getDefinirequipes() {
        return $this->definirequipes;
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

    function getGrupo() {
        return $this->grupo;
    }

    function getCipa() {
        return $this->cipa;
    }

    function getPlanilha() {
        return $this->planilha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDefinirequipes($definirequipes) {
        $this->definirequipes = $definirequipes;
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

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCipa($cipa) {
        $this->cipa = $cipa;
    }

    function setPlanilha($planilha) {
        $this->planilha = $planilha;
    }

}
