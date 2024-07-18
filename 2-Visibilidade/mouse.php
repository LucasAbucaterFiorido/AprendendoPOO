<?php

    //  + Public qualquer pessoa poderá ter acesso
    //  - Protected apenas mãe ou seus filhos, ou seja apenas dentro do código fonte ou relacionados ao arquivo fonte.
    //  # Private apenas a mãe, isto é, apenas o código fonte

    //Tente testar trocar a visibilidade e acessar ou modificar.


    class Mouse{
        public $modelos;    //Configurando a visibilidade
        public $cor;    //Configurando a visibilidade
        private $qtdBtt;      //Configurando a visibilidade
        protected $bateria;       //Configurando a visibilidade
        protected $pilha;       //Configurando a visibilidade
        protected $ligado;      //Configurando a visibilidade

        
        public function ligar(){    //função para marcar o estado de Ligado, na variavel "ligado" boleana.  //agora declarando sua visibilidade
            if($this->ligado){  //se "Ligado" for True, então:
                echo"Mouse já está ligado.";
            }
            else {      //se "Ligado" for False, então:
                $this->ligado = true;
                echo"Ligando mouse!";
            }
        }
        public function desligar(){     //função para marcar o estado de desligado, na variavel "ligado" boleana.   //agora declarando sua visibilidade
            if($this->ligado){      //se "Ligado" for True, então:
                $this->ligado = false;
                echo"Desligando mouse!";
            }
            else {      //se "Ligado" for False, então:
                echo"Mouse já está Desligado.";
            }
        }
        public function clicar($btt){ // d,e,l1,l2,m,dpi;  função para clicar com o mouse, usando a variavel clicar e o parâmetro indicando qual botão. //agora declarando sua visibilidade
            if($this->ligado){      //se "Ligado" for True, então:
                echo"Você clicou com o botão $btt";
            }
            else {      //se "Ligado" for False, então:
                echo"Você clicou com o botão $btt mas o mouse está desligado!!";
            }
        }
    }
    
    
    
?>