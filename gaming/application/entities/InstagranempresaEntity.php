<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of instagranempresaEntity
 *
 * @author Raphael Pizzo
 */
class InstagranempresaEntity {
    
   private $id;
   private $descricao;
   private $empresa_id;
   private $publicaauto;
   private $datacadastro;
   
   function getId() {
       return $this->id;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getEmpresa_id() {
       return $this->empresa_id;
   }

   function getPublicaauto() {
       return $this->publicaauto;
   }

   function getDatacadastro() {
       return $this->datacadastro;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setDescricao($descricao) {
       $this->descricao = $descricao;
   }

   function setEmpresa_id($empresa_id) {
       $this->empresa_id = $empresa_id;
   }

   function setPublicaauto($publicaauto) {
       $this->publicaauto = $publicaauto;
   }

   function setDatacadastro($datacadastro) {
       $this->datacadastro = $datacadastro;
   }
   
}
