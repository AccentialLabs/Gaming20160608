<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipesEntity
 *
 * @author Raphael Pizzo
 */
class EquipesEntity {
    private $id;
    private $cargo_id;
    private $departamento_id;
    private $unidade_id;
    private $cidade_id;
    private $estado_id;
    private $pais_id;
    private $quantidade;
    private $datacadastro;
    private $datainicio;
    private $datafim;
    private $tema_id;
    
    function getId() {
        return $this->id;
    }

    function getCargo_id() {
        return $this->cargo_id;
    }

    function getDepartamento_id() {
        return $this->departamento_id;
    }

    function getUnidade_id() {
        return $this->unidade_id;
    }

    function getCidade_id() {
        return $this->cidade_id;
    }

    function getEstado_id() {
        return $this->estado_id;
    }

    function getPais_id() {
        return $this->pais_id;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function getDatainicio() {
        return $this->datainicio;
    }

    function getDatafim() {
        return $this->datafim;
    }

    function getTema_id() {
        return $this->tema_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCargo_id($cargo_id) {
        $this->cargo_id = $cargo_id;
    }

    function setDepartamento_id($departamento_id) {
        $this->departamento_id = $departamento_id;
    }

    function setUnidade_id($unidade_id) {
        $this->unidade_id = $unidade_id;
    }

    function setCidade_id($cidade_id) {
        $this->cidade_id = $cidade_id;
    }

    function setEstado_id($estado_id) {
        $this->estado_id = $estado_id;
    }

    function setPais_id($pais_id) {
        $this->pais_id = $pais_id;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

    function setDatainicio($datainicio) {
        $this->datainicio = $datainicio;
    }

    function setDatafim($datafim) {
        $this->datafim = $datafim;
    }

    function setTema_id($tema_id) {
        $this->tema_id = $tema_id;
    }
    
}