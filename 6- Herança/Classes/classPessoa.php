<?php
    class Pessoa{
        //Atributos
        private $nome, $idade, $sexo;       //Atributoa basicos de uma pessoa.

        //Metodo Construtor
        function __construct($n, $i, $s)
        {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        //Metodos Getters e Setters
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }

        //Metodos
        public function fazerAniver(){
            $this->setIdade($this->getIdade() +1);
        }

    }
?>