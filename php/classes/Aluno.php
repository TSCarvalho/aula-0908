<?php
    class Aluno
    {
        private $nome;
        private $idade;
        private $sexo;

        function __construct()
        {
            $this->nome = "Não informado";
            $this->idade = 0;
            $this->sexo = "";
        }
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->sexo = $sexo;
        }
        function cadastrar($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }
        function exibir(){
            return "Nome: ".$this->nome."<br>Idade: ".$this->idade."<br>Sexo: ".$this->sexo;
        }
    }
