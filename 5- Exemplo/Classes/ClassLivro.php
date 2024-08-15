<?php
    //require_once("ClassPessoa.php");                  //Não necessario puxar a classe pessoa.
    require_once("interface.php");                      //Puxando arquivo da interface para poder declarar seus metodos no código fonte.
    class Livro implements Publicacao{                  //Declarando o nome da classe e implementando sua interface publica concluindo o encapsulamento.
        
        //Atributos
        private $titulo;                                //Visibilidade privada pois é um atributo raiz da classe, o titulo.
        private $autor;                                 //Visibilidade privada pois é um atributo raiz da classe, o autor.
        private $totalPags;                             //Visibilidade privada pois é um atributo raiz da classe, o Total de paginas.
        private $pagAtual;                              //Visibilidade privada pois é um atributo raiz da classe, o pagina atual.
        private $aberto;                                //Visibilidade privada pois é um atributo raiz da classe, se está aberto.
        private $leitor;                                //Visibilidade privada pois é um atributo raiz da classe, quem é o leitor.
        
        //construtor
        public function __construct($t, $a, $tp, $l)    //Construct para moldar como um objeto será construido pelo usuário com seus parametros.
        {                                               //Sem utilizar o Setter, pois estamos no próprio construtor, e não há problema.
            $this->titulo = $t;                         //Modificando "titulo" para a variavel "$t" dada pelo usuario.
            $this->autor = $a;                          //Modificando "autor" para a variavel "$a" dada pelo usuario.
            $this->totalPags = $tp;                     //Modificando "totalPags" para a variavel "$tp" dada pelo usuario.
            $this->aberto = false;                      //Modificando "aberto" para o valor "false" dado pelo programador.
            $this->leitor = $l;                         //Modificando "leitor" para a variavel "$l" dada pelo usuario.
        }

        //getters
        public function getTitulo(){                    //Metodo Getter para requisitar informação de um atributo titulo do objeto.
            return $this->titulo;                       //retornar informação titulo.
        }
        public function getAutor(){                     //Metodo Getter para requisitar informação de um atributo autor do objeto.
            return $this->autor;                        //retornar informação autor.
        }
        public function getTotalPags(){                 //Metodo Getter para requisitar informação de um atributo Total de paginas do objeto.
            return $this->totalPags;                    //retornar informação TotalPags.
        }
        public function getPaginaAtual(){               //Metodo Getter para requisitar informação de um atributo titulo do objeto.
            return $this->pagAtual;                     //retornar informação pagAtual.
        }
        public function getAberto(){                    //Metodo Getter para requisitar informação de um atributo titulo do objeto.
            return $this->aberto;                       //retornar informação aberto.
        }
        public function getLeitor(){                    //Metodo Getter para requisitar informação de um atributo leitor porém retornaum objeto diferente necessitando usar GET da própria classe Pessoa.
            return $this->leitor->getNome();            //retornar informação do leitor, um objeto PESSOA, então é necessario acessar o nome DENTRO do objeto de OUTRA classe.
        }

        //setters
        public function setTitulo($t){                  //Metodo Setter para modificar informações do atributo "titulo" do objeto com um parâmetro.
            $this->titulo = $t;                         //Modifica o atributo "titulo" com a variavel "$t" dado pelo usuário.
        }
        public function setAutor($a){                   //Metodo Setter para modificar informações do atributo "autor" do objeto com um parâmetro.
            $this->autor = $a;                          //Modifica o atributo "autor" com a variavel "$a" dado pelo usuário.
        }
        public function setTotalPags($tp){              //Metodo Setter para modificar informações do atributo "TotalPags" do objeto com um parâmetro.
            $this->totalPags = $tp;                     //Modifica o atributo "totalPags" com a variavel "$tp" dado pelo usuário.
        }
        public function setPaginaAtual($pa){            //Metodo Setter para modificar informações do atributo "PaginaAtual" do objeto com um parâmetro.
            $this->pagAtual = $pa;                      //Modifica o atributo "pagAtual" com a variavel "$pa" dado pelo usuário.
        }
        public function setAberto($a){                  //Metodo Setter para modificar informações do atributo "aberto" do objeto com um parâmetro.
            $this->aberto = $a;                         //Modifica o atributo "aberto" com a variavel "$a" dado pelo usuário.
        }
        public function setLeitor($l){                  //Metodo Setter para modificar informações do atributo "leitor" do objeto com um parâmetro.
            $this->leitor = $l;                         //Modifica o atributo "leitor" com a variavel "$l" dado pelo usuário.
        }

        //Metodos Interface                             //Metodos da Interface para controlar a liberdade do usuario para com o objeto.
        public function abrir(){                        //Metodo para abrir o livro.
            if($this->getAberto() == true){             //Se o livro ja estiver aberto, então:
                echo "<p>O livro já está aberto.</p>";  //Mande a mensagem de erro:
            }else{                                      //Se não:
                $this->setAberto(true);                 //Modifique o atributo "aberto" para true.
            }
        }
        public function fechar(){                       //Metodo para fechar o livro.
            if($this->getAberto() == false){            //Se o atributo "aberto" é false, então:
                echo "<p>O livro já está fechado.</p>"; //Mande a mensagem de erro:
            }else{                                      //Se não:
                $this->setAberto(false);                //Modifique o atributo "aberto" para false.
            }
        }
        public function folhear($p){                                        //Metodo para folhear o livro, com parametro com a pagina que o usuario quer acessar.
            if($this->getAberto() == false){                                //Se o atributo "aberto" é false, então:
                echo "<p>O livro está fechado, abra-o para folhea-lo!</p>"; //Mande a mensagem de erro:
            }else{                                                          //Se não:
                if($p > $this->getTotalPags()){                             //Se a pagina dada pelo usuario($p) for maior que o numero TOTAL de pags do livro, então:
                    $this->setPaginaAtual($this->getTotalPags());           //Modificar o atributo "paginaAtual" para o mesmo valor do atributo "totalPags".
                }elseif($p < 0){                                            //Se não, se a pagina dada pelo usuario($p) for menor que 0, então:
                    $this->setPaginaAtual(0);                               //Modificar o atributo "paginaAtual" para a menor pagina, no caso 0.
                }else{                                                      //Se não:
                    $this->setPaginaAtual($p);                              //Se nada for um problema, modificar o atributo "paginaAtual"  para a pagina dada pelo o usuario($p).
                }
            }
        }
        public function avancarPag(){                                       //Metodo para avancar pagina do livro.
            if($this->getAberto() == false){                                //Se o atributo "aberto" é false, então:
                echo "<p>O livro está fechado, abra-o para folhea-lo!</p>"; //Mande a mensagem de erro:
            }else{                                                          //Se não:
                if($this->getPaginaAtual() == $this->getTotalPags()){       //Se o atributo "paginaAtual" for igual ao atributo "totalPags" do livro, então:
                    $this->setPaginaAtual($this->getPaginaAtual());         //Modificar o atributo "paginaAtual" para a próprio atributo "paginaAtual".
                }else{                                                      //Se não:
                    $this->setPaginaAtual($this->getPaginaAtual() +1);      //Modificar o atributo "paginaAtual" para a próprio atributo "paginaAtual" mais 1.
                }
            }
        }
        public function voltarPag(){                                        //Metodo para voltar pagina do livro.
            if($this->getAberto() == false){                                //Se o atributo "aberto" é false, então:
                echo "<p>O livro está fechado, abra-o para folhea-lo!</p>"; //Mande a mensagem de erro:
            }else{                                                          //Se não:
                if($this->pagAtual == 0){                                   //Se o atributo "paginaAtual" for igual a 0, então:
                    $this->pagAtual = 0;                                    //Modificar o atributo "paginaAtual" para 0.
                }else{                                                      //Se não:
                    $this->setPaginaAtual($this->getPaginaAtual() -1);      //Modificar o atributo "paginaAtual" para a próprio atributo "paginaAtual" menos 1.
                }
            }
        }

        //Metodos                                                           Metodos publicos do codigo fonte sem a necessidade da interface.
        public function detalhes(){                                         //Metodos para apresentar os detalhes do objeto Livro.   
            //Mensagem apresentando os detalhes do livro e por quem é lido
            echo "<p>Livro " . $this->titulo . ", escrito por " . $this->autor . " com " . $this->totalPags . " páginas!";
            echo "<br>";
            echo "Sendo lido por " . $this->getLeitor() . ".</p>";
        }
    }
?>