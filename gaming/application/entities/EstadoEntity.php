<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoEntity
 *
 * @author Raphael Pizzo
 */
class EstadoEntity {
    
   private $id;
   private $descricao;
   private $pais_id;
   private $uf;
    
   function getId() {
       return $this->id;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getPais_id() {
       return $this->pais_id;
   }

   function getUf() {
       return $this->uf;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setDescricao($descricao) {
       $this->descricao = $descricao;
   }

   function setPais_id($pais_id) {
       $this->pais_id = $pais_id;
   }

   function setUf($uf) {
       $this->uf = $uf;
   }
   
}
