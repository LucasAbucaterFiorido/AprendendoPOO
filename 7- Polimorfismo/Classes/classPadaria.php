<?php
    require_once("classTrabalhador.php");

    class Padaria extends Trabalhador{
        //Atributos


        //Construtor

        
        //Metodos Especiais


        //Metodos

        //Como falado antes, é somente necssário manter os dados padrões como sua visibilidade, seu nome e a assinatura (quantidade e tipo de dados de seus parâmetros).

        public function trabalhar(){
            echo "<p>".$this->getNome()." está fazendo pães.</p>";
        }
        public function intervalo(){
            echo "<p>".$this->getNome(). " está no horário de almoço na padaria.</p>";
        }
    }
?>