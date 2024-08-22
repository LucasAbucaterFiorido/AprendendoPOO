<?php
    include_once("classPessoa.php");

    //Herança pobre ou herança de implementação
    //Pois a classe de Pessoa é abstrata e usada apenas como progenitora, não se pode Instanciar e apenas como SuperClasse.
    //Final antes da Classe, significa que ela não pode ter subclasses, ou seja, ela é folha(sheet) e não pode ter alterações de suas filhas.


    final class Visitante extends Pessoa{
        //Atributo
        //Construtor
        //Metodos Getters e Setters
        //Metodos
    }
?>