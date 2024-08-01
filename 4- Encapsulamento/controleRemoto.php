<?php
    require_once("Interface.php");
    class ControleRemoto implements Controlador {
        
        private $ligado;        //Atributo se está ligado o eletronico.
        private $volume;        //Atributo do volume do eletronico.
        private $reproduzindo;       //Atributo se o eletronico está reproduzindo.

        //CONSTRUCTOR

        public function __construct() {
            $this->ligado = false;          //Ao ser criado padrão Desligado(false).
            $this->volume = 50;             //Ao ser criado padrão volume na metade(50).
            $this->reproduzindo = false;    //Ao ser criado padrão não reproduzindo nada(false).
        }

        //GETTERS

        private function getLigado(){
            return $this->ligado;           //retorna o estado do ligado(variavel Bool).
        }
        private function getVolume(){
            return $this->volume;           //retorna o estado do volume(variavel integer).
        }
        private function getReproduzindo(){
            return $this->reproduzindo;     //retorna o estado do reproduzindo(variavel Bool).
        }

        //SETTERS

        private function setLigado($l){
            $this->ligado = $l;                 //modifica o estado do volume(variavel integer).
        }
        private function setVolume($v){
            $this->volume = $v;                 //modifica o estado do volume(variavel integer).
        }
        private function setReproduzindo($r){
            $this->reproduzindo = $r;           //modifica o estado do reproduzindo(variavel Bool).
        }

        //INTERFACE

        public function ligar(){       //metodo para ligar o controle remoto do arquivo "Interface"
            $this->setLigado(true);
        }
        public function desligar(){        //metodo para desligar o controle remoto do arquivo "Interface"
            $this->setLigado(false);
        }
        public function abrirMenu(){       //metodo para abrir menu do controle remoto do arquivo "Interface"
            if ($this->getLigado() == true) {       //se estiver ligado, então:
                $l = $this->getLigado();            //guardando estado do ligado na variavel $l
                $v = $this->getVolume();            //guardando estado do volume na variavel $v
                $r = $this->getReproduzindo();      //guardando estado do reproduzindo na variavel $r

                echo "<pre>";                       //inicio de formatação de dados, para melhor vizualização
                echo "-Menu- <br>";                 //mostrando ao usuario uma mensagem
                var_dump("Ligado: ". $l);           //apresentando estado do ligado
                var_dump("Volume: ". $v);           //apresentando estado do volume
                var_dump("Reproduzindo: ". $r);     //apresentando estado do reproduzindo
                echo "</pre>";                      //fim de formatação de dados, para melhor vizualização
            }
            else{
                echo "Eletronico desligado!!";      //caso esteja desligado mostrar mensagem:
            }
        }
        public function fecharMenu(){      //metodo para fechar o menu do controle remoto do arquivo "Interface"
            echo "Fechando Menu!";
        }
        public function maisVolume(){                       //metodo para aumentar o volume do controle remoto do arquivo "Interface"
            if($this->getLigado()){                         //se estiver ligado, então:
                $this->setVolume($this->getVolume() + 5);   //Aumentando o volume em +5
            }else{
                echo "Eletronico desligado!!";              //caso esteja desligado mostrar mensagem:
            }
        }
        public function menosVolume(){                      //metodo para diminuir o volume do controle remoto do arquivo "Interface"
            if($this->getLigado()){                         //se estiver ligado, então:
                $this->setVolume($this->getVolume() - 5);   //Diminuindo o volume em -5
            }else{
                echo "Eletronico desligado!!";              //caso esteja desligado mostrar mensagem:
            }
        }
        public function mudoON(){                   //metodo para ligar o mudo do controle remoto do arquivo "Interface"
            if($this->getLigado()){                 //se estiver ligado, então:
                $this->setVolume(0);                //modificando volume para o mudo.
            }else{
                echo "Eletronico desligado!!";      //caso esteja desligado mostrar mensagem:
            }
        }
        public function mudoOFF(){                  //metodo para desligar o mudo do controle remoto do arquivo "Interface"
            if($this->getLigado()){                 //se estiver ligado, então:
                if($this->getVolume() == 0){        //se volume for zero, então:
                    $this->setVolume(50);           //Tirar do mudo e atualizar volume para metade(50)
                }
                else{
                    echo "Já não está no mudo!";       //se não estiver no mudo, mostrar esta mensagem;
                }
            }else{
                echo "Eletronico desligado!!";      //caso esteja desligado mostrar mensagem:
            }
        }
        public function play(){                     //metodo para dar play com controle remoto do arquivo "Interface"
            if($this->getLigado()){                 //se estiver ligado, então:
                if(!$this->getReproduzindo()){      //se não estiver reproduzindo, então:
                    $this->setReproduzindo(true);   //dando Play
                }
            }else{
                echo "Eletronico desligado!!";      //caso esteja desligado mostrar mensagem:
            }
        }
        public function pause(){                    //metodo para dar play com controle remoto do arquivo "Interface"
            if($this->getLigado()){                 //se estiver ligado, então:
                if($this->getReproduzindo()){       //se não estiver reproduzindo, então:
                    $this->setReproduzindo(false);  //dando pause
                }
            }else{
                echo "Eletronico desligado!!";      //caso esteja desligado mostrar mensagem:  
            }
        }
    }
?>