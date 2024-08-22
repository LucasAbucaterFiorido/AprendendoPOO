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
        include_once("Classes/classPessoa.php");  
        include_once("Classes/classFuncionario.php");  
        include_once("Classes/classAluno.php");  
        include_once("Classes/classProfessor.php");  
                                      
        $p1 = new Pessoa("Lucas", 23, "M");
        $a1 = new Aluno("Roberta", 43, "F");
        $pr1 = new Professor("teste", 10, "F");
        $f1 = new Funcionario("etset", 01, "M");


        $pr1->receberAumento(300);
        $pr1->receberAumento(15);
        $f1->fazerAniver();
        $f1->mudarTrabalho("Cozinha");
        $a1->cancelarMatricula();
        




        echo "<pre>";
        //var_dump($a1);
        print_r($p1);
        print_r($a1);
        print_r($pr1);
        print_r($f1);
        echo "</pre>";
    ?>                        
    <!-- abrindo PHP -->
</body>
</html>