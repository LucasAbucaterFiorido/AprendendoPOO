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
    
        //Como pode ver, não precisamos incluir a classe Pessoa e Aluno, pois elas são superclasses abstratas com o objetivo te nutrir as subclasses.
        //E por estarem vinculadas, as subclasses HERDAM suas progenitoras, assim, estando ligadas, e são puxadas diretamente quando chamamos uma de suas "filhas".

        include_once("Classes/classVisitante.php");
        include_once("Classes/classProfessor.php");
        include_once("Classes/classBolsista.php");
        include_once("Classes/classTecnico.php");


        $p1 = new Visitante("Lusca", 23, "M");
        $p2 = new Professor("Sthefany", 13, "F");
        $p3 = new Bolsista("Duda", 28, "F");
        $p4 = new Tecnico("Lula", 99, "X");
        
        
        $p3->pagarMensalidade();
        $p4->pagarMensalidade();
        $p4->praticar();
        $p2->Aumento(300);
        $p3->renovarBolsa();

        echo "<pre>";
        print_r($p2);
        echo "</pre>";
    ?>                        
    <!-- abrindo PHP -->
</body>
</html>