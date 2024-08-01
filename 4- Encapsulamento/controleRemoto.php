<?php
    require_once("Interface.php");
    class ControleRemoto implements Controlador {
        
        private $ligado;        //Atributo 
        private $volume;        //Atributo
        private $reproduzindo;       //Atributo

        //CONSTRUCTOR

        public function __construct() {
            $this->ligado = false;
            $this->volume = 50;
            $this->reproduzindo = false;
        }

        //GETTERS

        private function getLigado(){
            return $this->ligado;
        }
        private function getVolume(){
            return $this->volume;
        }
        private function getReproduzindo(){
            return $this->reproduzindo;
        }

        //SETTERS

        private function setLigado($l){
            $this->ligado = $l;
        }
        private function setVolume($v){
            $this->volume = $v;
        }
        private function setReproduzindo($t){
            $this->reproduzindo = $t;
        }

        //INTERFACE

        public function ligar(){       //metodo para ligar o controle remoto do arquivo "Interface"
            $this->setLigado(true);
            // $show = $this->getLigado();
            // echo "<pre>";var_dump("Ligado: ". $show);echo "</pre>";
        }
        public function desligar(){        //metodo para desligar o controle remoto do arquivo "Interface"
            $this->setLigado(false);
            //$show = $this->getLigado();
            //echo "<pre>";var_dump("Ligado: ". $show);echo "</pre>";
        }
        public function abrirMenu(){       //metodo para abrir menu do controle remoto do arquivo "Interface"
            if ($this->getLigado() == true) {
                $l = $this->getLigado();
                $v = $this->getVolume();
                $t = $this->getReproduzindo();

                echo "<pre>";
                echo "-Menu- <br>";
                var_dump("Ligado: ". $l);
                var_dump("Volume: ". $v);
                var_dump("Reproduzindo: ". $t);
                echo "</pre>";
            }
            else{
                echo "Eletronico desligado!!";
            }
        }
        public function fecharMenu(){      //metodo para fechar o menu do controle remoto do arquivo "Interface"
            echo "Fechando Menu!";
        }
        public function maisVolume(){      //metodo para aumentar o volume do controle remoto do arquivo "Interface"
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo "Eletronico desligado!!";
            }
        }
        public function menosVolume(){     //metodo para diminuir o volume do controle remoto do arquivo "Interface"
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo "Eletronico desligado!!";
            }
        }
        public function mudoON(){      //metodo para ligar o mudo do controle remoto do arquivo "Interface"
            if($this->getLigado()){
                $this->setVolume(0);
            }else{
                echo "Eletronico desligado!!";
            }
        }
        public function mudoOFF(){     //metodo para desligar o mudo do controle remoto do arquivo "Interface"
            if($this->getLigado()){
                if($this->getVolume() == 0){
                    $this->setVolume(50);
                }
                else{
                    echo "Não está no mudo!";
                }
            }else{
                echo "Eletronico desligado!!";
            }
        }
        public function play(){        //metodo para dar play com controle remoto do arquivo "Interface"
            if($this->getLigado()){
                if(!$this->getReproduzindo()){
                    $this->setReproduzindo(true);
                }
            }else{
                echo "Eletronico desligado!!";
            }
        }
        public function pause(){       //metodo para dar play com controle remoto do arquivo "Interface"
            if($this->getLigado()){
                if($this->getReproduzindo()){
                    $this->setReproduzindo(false);
                }
            }else{
                echo "Eletronico desligado!!";
            }
        }
    }
?>