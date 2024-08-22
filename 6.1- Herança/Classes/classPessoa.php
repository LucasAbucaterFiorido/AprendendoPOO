<?php

    //Herança
    //ABSTRACT antes da classe, significa que não se pode instanciar esta classe, apenas servindo de progenitora, servindo as subclasses com
    //seu metodos e atributos


    abstract class Pessoa{
        //Atributo
        private $nome, $idade, $sexo;

        //Construtor
        public function __construct($n, $i, $s)
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
        public final function fazerAniversario(){       //Final quer dizer que é não pode ser sobre posta ou alterada por outra classe.
            $this->setIdade($this->getIdade() +1);
        }
    }
?>