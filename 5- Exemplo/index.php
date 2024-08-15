<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo POO</title>
</head>
<body>
    <!-- abrindo PHP -->
    <?php                                       
        require_once("Classes/ClassPessoa.php");            //Puxando arquivo da classe para poder instanciar.
        require_once("Classes/ClassLivro.php");             //Puxando arquivo da classe para poder instanciar.

        $p[0] = new Pessoa("Lucas", 22, "M");               //Criando um objeto da classe Pessoa.
        $l[0] = new Livro("Livro1", "Autor1", 300, $p[0]);  //Criando um objeto da classe Livro.

        $l[0]->avancarPag();                                //Utilizando metodo da classe Livro para avançar uma pagina.
        $l[0]->abrir();                                     //Utilizando metodo da classe Livro para abrir um livro.
        $l[0]->avancarPag();                                //Utilizando metodo da classe Livro para avançar pagina.
        $l[0]->avancarPag();                                //Utilizando metodo da classe Livro para avançar pagina.    
        $l[0]->avancarPag();                                //Utilizando metodo da classe Livro para avançar pagina.
        $l[0]->avancarPag();                                //Utilizando metodo da classe Livro para avançar pagina.
        $l[0]->voltarPag();                                 //Utilizando metodo da classe Livro para voltar uma pagina.
        $l[0]->folhear(25);                                 //Utilizando metodo da classe Livro para folhear a pagina.
        

        echo "<pre>";print_r($p);echo "</pre>";             //<pre> para modelar como os dados serão apresentados, e prin_r para mostrar os dados do objeto pessoa.
        echo "<pre>";print_r($l);echo "</pre>";             //<pre> para modelar como os dados serão apresentados, e prin_r para mostrar os dados do objeto livro.
        $l[0]->detalhes();                                  //Utilizando metodo publico dp código fonte da classe Livro
    ?>                        
    <!-- abrindo PHP -->
</body>
</html>