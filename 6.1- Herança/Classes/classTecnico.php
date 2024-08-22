<?php
    include_once("classAluno.php");

    //Final antes da Classe, significa que ela não pode ter subclasses, ou seja, ela é folha(sheet) e não pode ter alterações de suas filhas.

    final class Tecnico extends Aluno{
        //Atributo
        private $registroProfissional;

        //Construtor
        //O construtor está sendo herdado da classe Pessoa.

        //Metodos Getters e Setters
        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($rp){
            $this->registroProfissional = $rp;
        }

        //Metodos
        public function praticar(){
            echo "<p>Aluno ". $this->getNome() . " está praticando.</p>";
        }

    }
?>