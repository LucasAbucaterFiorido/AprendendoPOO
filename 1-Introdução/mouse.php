<?php

    class Mouse{
        var $modelo;    //declarando variavel do modelo
        var $cor;    //declarando variavel da cor
        var $qtdBtt;      //declarando variavel da quantidade de botões
        var $bateria;       //declarando variavel da % da bateria do mouse
        var $pilha;       //declarando variavel de se há pilha no mouse
        var $ligado;      //declarando variavel do estado ligado ou desligado do mouse

        
        function ligar(){    //função para marcar o estado de Ligado, na variavel "ligado" boleana.
            if($this->ligado){  //se "Ligado" for True, então:
                echo"Mouse já está ligado.";
            }
            else {      //se "Ligado" for False, então:
                $this->ligado = true;
                echo"Ligando mouse!";
            }
        }
        function desligar(){     //função para marcar o estado de desligado, na variavel "ligado" boleana.
            if($this->ligado){      //se "Ligado" for True, então:
                $this->ligado = false;
                echo"Desligando mouse!";
            }
            else {      //se "Ligado" for False, então:
                echo"Mouse já está Desligado.";
            }
        }
        function clicar($btt){   //função para clicar com o mouse, usando a variavel clicar e o parâmetro indicando qual botão.
            if($this->ligado){      //se "Ligado" for True, então:
                echo"Você clicou com o botão $btt";
            }
            else {      //se "Ligado" for False, então:
                echo"Você clicou com o botão $btt mas o mouse está desligado!!";
            }
        }
    }
    
    
    
?>