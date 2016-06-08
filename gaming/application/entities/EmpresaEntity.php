<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaEntity
 *
 * @author Raphael Pizzo
 */

class EmpresaEntity {
   private $id;
   private $nome;
   private $cnpj;
   private $cep;
   private $endereco;
   private $endereconumero;
   private $enderecocomplemento;
   private $bairro;
   private $cidade_id;
   private $telefone1;
   private $telefone2;
   private $email;
   private $site;
   private $logotipourl;
   private $responsavel_id;
   private $responsaveltelefone;
   private $responsavelramal;
   private $responsavelcelular;
   private $responsavelemail;
   private $status;
   private $datacadastro;
   private $senha;
   private $estado_id;
   private $pais_id;
   
   function getId() {
       return $this->id;
   }

   function getNome() {
       return $this->nome;
   }

   function getCnpj() {
       return $this->cnpj;
   }

   function getCep() {
       return $this->cep;
   }

   function getEndereco() {
       return $this->endereco;
   }

   function getEndereconumero() {
       return $this->endereconumero;
   }

   function getEnderecocomplemento() {
       return $this->enderecocomplemento;
   }

   function getBairro() {
       return $this->bairro;
   }

   function getCidade_id() {
       return $this->cidade_id;
   }

   function getTelefone1() {
       return $this->telefone1;
   }

   function getTelefone2() {
       return $this->telefone2;
   }

   function getEmail() {
       return $this->email;
   }

   function getSite() {
       return $this->site;
   }

   function getLogotipourl() {
       return $this->logotipourl;
   }

   function getResponsavel_id() {
       return $this->responsavel_id;
   }

   function getResponsaveltefone() {
       return $this->responsaveltefone;
   }

   function getResponsavelramal() {
       return $this->responsavelramal;
   }

   function getResponsavelcelular() {
       return $this->responsavelcelular;
   }

   function getResponsavelemail() {
       return $this->responsavelemail;
   }

   function getStatus() {
       return $this->status;
   }

   function getDatacadastro() {
       return $this->datacadastro;
   }
   
   function getSenha() {
       return $this->senha;
   }
   
    function getEstado_id() {
       return $this->estado;
   }
   
     function getPais_id() {
       return $this->pais;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setCnpj($cnpj) {
       $this->cnpj = $cnpj;
   }

   function setCep($cep) {
       $this->cep = $cep;
   }

   function setEndereco($endereco) {
       $this->endereco = $endereco;
   }

   function setEndereconumero($endereconumero) {
       $this->endereconumero = $endereconumero;
   }

   function setEnderecocomplemento($enderecocomplemento) {
       $this->enderecocomplemento = $enderecocomplemento;
   }

   function setBairro($bairro) {
       $this->bairro = $bairro;
   }

   function setCidade_id($cidade_id) {
       $this->cidade_id = $cidade_id;
   }

   function setTelefone1($telefone1) {
       $this->telefone1 = $telefone1;
   }

   function setTelefone2($telefone2) {
       $this->telefone2 = $telefone2;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSite($site) {
       $this->site = $site;
   }

   function setLogotipourl($logotipourl) {
       $this->logotipourl = $logotipourl;
   }

   function setResponsavel_id($responsavel_id) {
       $this->responsavel_id = $responsavel_id;
   }

   function setResponsaveltefone($responsaveltefone) {
       $this->responsaveltefone = $responsaveltefone;
   }

   function setResponsavelramal($responsavelramal) {
       $this->responsavelramal = $responsavelramal;
   }

   function setResponsavelcelular($responsavelcelular) {
       $this->responsavelcelular = $responsavelcelular;
   }

   function setResponsavelemail($responsavelemail) {
       $this->responsavelemail = $responsavelemail;
   }

   function setStatus($status) {
       $this->status = $status;
   }

   function setDatacadastro($datacadastro) {
       $this->datacadastro = $datacadastro;
   }

function setSenha($senha) {
       $this->senha = $senha;
   }
   
   function setEstado_id($estado_id) {
       $this->estado_id = $estado_id;
   }
   
   function setPais_id($pais_id) {
       $this->pais_id = $pais_id;
   }
}