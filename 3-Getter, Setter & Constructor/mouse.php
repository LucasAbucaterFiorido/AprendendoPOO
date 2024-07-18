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


    class Mouse{
        private $modelo;    //Configurando a visibilidade como privada
        private $cor;    //Configurando a visibilidade como privada
        private $qtdBtt;      //Configurando a visibilidade como privada
        private $bateria;       //Configurando a visibilidade como privada
        private $pilha;       //Configurando a visibilidade como privada
        private $ligado;      //Configurando a visibilidade como privada
        

        
        //o nome do construtor pode ser __construct ou o próprio nome da classe no caso "Mouse"

        //---------aqui o construtor pode ser modificado com os dados inseridos em seu código fonte sem alteração do usuario em sua criação.

        //public function __construct(){      
            //usar o getter e setter ou ir direto nas variaveis não tem problema pois este é o código fonte.      
            //$this->setModelo("Logitech");     //Todos os objeto serão criados com o modelo padronizado em "Logitech" mesmo que possa ou não ser alterado mais tarde.
            //$this->setCor("Azul");            //Todos os objeto serão criados com a Cor padronizada em "Azul" mesmo que possa ou não ser alterado mais tarde.
            //ou            //usar o getter e setter ou ir direto nas variaveis não há diferença, pois este é o código fonte.
            //$this->modelo = "Logitech";     //Todos os objeto serão criados com o modelo padronizado em "Logitech" mesmo que possa ou não ser alterado mais tarde.
            //$this->cor = "Azul";            //Todos os objeto serão criados com a Cor padronizada em "Azul" mesmo que possa ou não ser alterado mais tarde.
        //}
        

        //---------aqui o construtor pode ser modificado na hora que o objeto for criado, assim inserindo os parâmetros.

        //public function __construct($m, $c){      
            //$this->setModelo($m);     //Todos os objetos em sua criação será alterado pelo parâmetro dado, mesmo que possa ou não ser alterado mais tarde.
            //$this->setCor($c);        //Todos os objetos em sua criação será alterado pelo parâmetro dado, mesmo que possa ou não ser alterado mais tarde.
            //ou            //usar o getter e setter ou ir direto nas variaveis não há diferença, pois este é o código fonte.
            //$this->modelo = $m;       //Todos os objetos em sua criação será alterado pelo parâmetro dado, mesmo que possa ou não ser alterado mais tarde.
            //$this->cor = $c;          //Todos os objetos em sua criação será alterado pelo parâmetro dado, mesmo que possa ou não ser alterado mais tarde.
        //}



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