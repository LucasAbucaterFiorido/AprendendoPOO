<?php
    include_once("classAluno.php");

    class Bolsista extends Aluno{
        //Atributo
        private $bolsa;

        //Construtor
        //O construtor está sendo herdado da classe Pessoa.

        //Metodos Getters e Setters
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($b){
            $this->bolsa = $b;
        }

        //Metodos
        public function renovarBolsa(){
            echo "<p>Renovando Bolsa do Aluno ". $this->getNome()."</p>";
        }
        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno(a) bolsista ". $this->getNome()."</p>";
        }
    }
?>