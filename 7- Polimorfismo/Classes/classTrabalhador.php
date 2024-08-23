<?php

    //Polimorfismo

        //Uma classe e uma função abstrata, nada mais é que uma idealização de como será uma classe, que no caso a classe é um molde para se criar um Objeto.
        //Não se pode instancia uma classe abstrata como não se pode usar uma função abstrata.
        //Porém podemos alterar suas informações padrões, ou em outras palavras, SOBRESCREVER as funções e informações abstratas.
        //Normalmente usasse uma @Sobreescrever, mas em PHP, não é necessario, apenas escrever exatamente os mesmo dados iniciais e manter sua assinatura.

    abstract class Trabalhador{
        //Atributos
        private $nome, $idade, $sexo;

        //Construtor
        public function __construct($n, $i, $s)
        {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }
        
        //Metodos Especiais
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

        //Para melhor entendimento, "como podemos utilizar uma função em uma classe abstrata ?", por isso é usado apenas como idelização, indicativo do que há de ser feito em uma "FINAL CLASS".

        public abstract function trabalhar();
        public abstract function intervalo();
    }
?>