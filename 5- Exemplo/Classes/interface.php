<?php
    interface Publicacao{
        public function abrir();       //metodo para abrir Livro
        public function fechar();        //metodo para fechar Livro
        public function folhear($p);       //metodo para folear Livro
        public function avancarPag();      //metodo para avancar pagina no Livro
        public function voltarPag();      //metodo para voltar pagina no Livro

        //Normalmente é necessario identar "Abstract" para a interface, mas especificamente em PHP, não é necessario e ocorre ERRO.

        // public abstract function abrir(); 
        // public abstract function fechar();  
        // public abstract function folhear($p); 
        // public abstract function avancarPag();
        // public abstract function voltarPag();

    }
?>