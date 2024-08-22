<?php   
    include_once("classPessoa.php");

    class Funcionario extends Pessoa{
        //Atributos
        private $setor, $trabalhando;       //Atributoa basicos de uma pessoa.

        //Metodo Construtor
        function __construct($n, $i, $s)
        {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        //Metodos Getters e Setters
        public function getSetor(){
            return $this->setor;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setSetor($s){
            $this->setor = $s;
        }
        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }

        //Metodos
        public function mudarTrabalho($ss){
            $this->setSetor($ss);
        }

    }
?>