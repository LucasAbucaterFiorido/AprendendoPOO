<?php
    include_once("classPessoa.php");

    class Aluno extends Pessoa{             //A classe Aluno HERDA a classe Pessoa, o que significa que seus atributos e metodos também se aplicam a classe ATUAL.
        //Atributos
        private $matricula, $curso;         //Atributoa basicos de um Aluno.

        //Metodo Construtor
        function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        //Metodos Getters e Setters
        public function getMatricula(){
            return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setMatricula($m){
            $this->matricula = $m;
        }
        public function setCurso($c){
            $this->curso = $c;
        }

        //Metodos
        public function cancelarMatricula(){
            $this->setMatricula(false);
        }

    }
?>