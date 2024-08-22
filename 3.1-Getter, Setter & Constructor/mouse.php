<?php

    //  #Métodos Acessores (Getters)
    //Métodos usados para acessar os dados do objeto através de uma função para o adicionamento de uma camada de proteção e mantendo a organização do código.

    //  #Métodos Modificadores (Setters) filhos, ou seja apenas dentro do código fonte ou relacionados ao arquivo fonte.
    //Métodos usados para modificar os dados do objeto através de uma função para o adicionamento de uma camada de proteção e mantendo a organização do código.

    //  #Método Construtor
    //Método usado para facilidade na criação de objetos; Normalmente usado junto á parâmetros.



    //Desta vez colocaremos todas as variáveis como privadas pois teremos acesso a elas com os getters e setters, então fora deste arquivo no
    //no caso o arquivo fonte não poderemos modificar ou acessar diretamente as variaveis dependendo apenas das funções isso possibilita confi-
    //gurar algum informação padrão sem necessitar permitir acesso ou alteração da parte do usuário.






    //esperando lançar o PHP 8.4


    class Mouse{
        private string $modelo {
            set{}
            get{}
        }
        private $cor;    
        private $qtdBtt;
        private $bateria;
        private $pilha;
        private $ligado;
        




        public function getModelo(){
            return $this->modelo;   //retornando os dados da variavel modelo.
        }
        public function getCor(){
            return $this->cor;      //retornando os dados da variavel cor.
        }
        public function getQtdBtt(){
            return $this->qtdBtt;       //retornando os dados da variavel quantidade de botoes.
        }
        public function getBateria(){
            return $this->bateria;      //retornando os dados da variavel bateria.
        }
        public function getPilha(){
            return $this->pilha;        //retornando os dados da variavel pilha.
        }
        public function getLigado(){
            return $this->ligado;       //retornando os dados da variavel ligado.
        }



        public function setModelo($m){
            $this->modelo = $m;     //modificando os dados da variavel modelo com o parâmetro $m inserido pelo usuário.
        }
        public function setCor($c){
            $this->cor = $c;        //modificando os dados da variavel cor com o parâmetro $c inserido pelo usuário.
        }
        public function setQtdBtt($qb){
            $this->qtdBtt = $qb;        //modificando os dados da variavel qtdbtt com o parâmetro $qb inserido pelo usuário.
        }
        public function setBateria($b){
            $this->bateria = $b;    //modificando os dados da variavel bateria com o parâmetro $b inserido pelo usuário.
        }
        public function setPilha($p){
            if($p === 1){       //se o dado que o usuário enviou foi 1, então há pilha:
                $this->pilha = true;        //modificando estado do mouse para (true) que significa que tem pilha;
            }
            elseif($p === 0){       //se o dado que o usuário enviou foi 0, então desligar:
                $this->pilha = false;       //modificando estado do mouse para (false) que significa que não há pilha;
            }
        }
        public function setLigado($l){
            if($l == 1){    //se o dado que o usuário enviou foi 1, então ligar:
                $this->ligado = true;   //modificando estado do mouse para ligado (true);
            }
            elseif($l == 0){    //se o dado que o usuário enviou foi 0, então desligar:
                $this->ligado = false;    //modificando estado do mouse para desligado (false);
            }
        }

    }
?>