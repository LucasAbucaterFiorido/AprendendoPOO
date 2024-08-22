<?php
    include_once("classPessoa.php");

    //Final antes da Classe, significa que ela não pode ter subclasses, ou seja, ela é folha(sheet) e não pode ter alterações de suas filhas.

    final class Professor extends Pessoa{   
        //Atributo
        private $especialidade, $salario;

        //Construtor
        //O construtor está sendo herdado da classe Pessoa.

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
        public function Aumento($au){
            $this->setSalario($this->getSalario() + $au);
        }
    }
?>