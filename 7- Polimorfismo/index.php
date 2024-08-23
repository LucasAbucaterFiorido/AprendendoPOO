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
        require_once("Classes/classObra.php");
        require_once("Classes/classPolicia.php");
        require_once("Classes/classPadaria.php");
        
        $t1 = new Obra("João", 20, "M");
        $t2 = new Policia("Giovana", 32, "F");
        $t3 = new Padaria("Guilherme", 24, "M");

        $t1->trabalhar();
        $t1->intervalo();
        $t2->trabalhar();
        $t2->intervalo();
        $t3->trabalhar();
        $t3->intervalo();
        

        echo "<pre>";
        print_r($t1);
        print_r($t2);
        print_r($t3);
        echo "</pre>";
    ?>                        
    <!-- abrindo PHP -->
</body>
</html>