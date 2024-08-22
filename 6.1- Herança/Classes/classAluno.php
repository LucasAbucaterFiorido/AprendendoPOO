<?php
    include_once("classPessoa.php");

    abstract class Aluno extends Pessoa{
        //Atributo
        private $matricula, $curso;

        //Construtor
        //O construtor está sendo herdado da classe Pessoa.

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
        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno(a) ". $this->getNome() . "</p>";
        }
    }
?>