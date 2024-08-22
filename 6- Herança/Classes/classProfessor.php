<?php
    include_once("classPessoa.php");

    class Professor extends Pessoa{
        //Atributos
        private $especialidade, $salario;       //Atributoa basicos de uma pessoa.

        //Metodo Construtor
        function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        //Metodos Getters e Setters
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function setEspecialidade($e){
            $this->especialidade = $e;
        }
        public function setSalario($s){
            $this->salario = $s;
        }

        //Metodos
        public function receberAumento($a){
            $this->setSalario($this->getSalario() + $a);
        }

    }
?>