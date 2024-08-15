<?php
    class Pessoa{                                   //Declarando o nome da classe sem interface.
        
        //Atributos
        private $nome;                              //Visibilidade privada pois é um atributo raiz da classe, o nome.
        private $idade;                             //Visibilidade privada pois é um atributo raiz da classe, a idade.
        private $sexo;                              //Visibilidade privada pois é um atributo raiz da classe, o sexo.

        //Construtor
        function __construct($n, $i, $s)            //Construct para moldar como um objeto será construido pelo usuário com seus parametros.
        {                                           //Sem utilizar o Setter, pois estamos no próprio construtor, e não há problema.
            $this->nome = $n;                       //Modificando "nome" para a variavel "$n" dada pelo usuario.
            $this->idade = $i;                      //Modificando "idade" para a variavel "$i" dada pelo usuario.
            $this->sexo = $s;                       //Modificando "sexo" para a variavel "$s" dada pelo usuario.
        }

        //Getters
        public function getNome(){                  //Metodo Getter para requisitar informação de um atributo "nome" do objeto.
            return $this->nome;                     //retornar informação "nome".
        }
        public function getIdade(){                 //Metodo Getter para requisitar informação de um atributo "idade" do objeto.
            return $this->idade;                    //retornar informação "idade".
        }
        public function getSexo(){                  //Metodo Getter para requisitar informação de um atributo "sexo" do objeto.
            return $this->sexo;                     //retornar informação "sexo".
        }

        //Setters
        public function setNome($n){                //Metodo Setter para modificar informações do atributo "nome" do objeto com um parâmetro.
            $this->nome = $n;                       //Modifica o atributo "nome" com a variavel "$n" dado pelo usuário.
        }
        public function setIdade($i){               //Metodo Setter para modificar informações do atributo "idade" do objeto com um parâmetro.
            $this->idade = $i;                      //Modifica o atributo "idade" com a variavel "$i" dado pelo usuário.
        }
        public function setSexo($s){                //Metodo Setter para modificar informações do atributo "sexo" do objeto com um parâmetro.
            $this->sexo = $s;                       //Modifica o atributo "sexo" com a variavel "$s" dado pelo usuário.
        }

        //Metodos                                   Metodos publicos do codigo fonte sem a necessidade da interface.
        public function fazerAniver(){              //Metodo para a pessoa fazer aniversário.
            $this->setIdade($this->getIdade() +1);  //Modifica o atributo "Idade" somando +1 a idade atual da pessoa.
        }
    }
?>