<?php
    interface Controlador{
        public function ligar();       //metodo para ligar o controle remoto
        public function desligar();        //metodo para desligar o controle remoto
        public function abrirMenu();       //metodo para abrir menu do controle remoto
        public function fecharMenu();      //metodo para fechar o menu do controle remoto
        public function maisVolume();      //metodo para aumentar o volume do controle remoto
        public function menosVolume();     //metodo para diminuir o volume do controle remoto
        public function mudoON();      //metodo para ligar o mudo do controle remoto
        public function mudoOFF();     //metodo para desligar o mudo do controle remoto
        public function play();        //metodo para dar play com controle remoto
        public function pause();       //metodo para dar play com controle remoto

        //Normalmente é necessario identar "Abstract" para a interface, mas especificamente em PHP, não é necessario e ocorre ERRO.

        //public abstract function ligar();  
        //public abstract function desligar();   
        //public abstract function abrirMenu();  
        //public abstract function fecharMenu(); 
        //public abstract function maisVolume(); 
        //public abstract function menosVolume();
        //public abstract function mudoON(); 
        //public abstract function mudoOFF();
        //public abstract function play();   
        //public abstract function pause();  

    }
?>