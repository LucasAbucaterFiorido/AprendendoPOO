<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo POO</title>
</head>
<body>
    <?php 
        require_once ('mouse.php');     //adicionando arquivo da classe no arquivo atual.
        
        $mou1 = new Mouse;      //criando um novo objeto.
        var_dump($mou1);
        echo "<br>";
        $mou1->setCor("vermelho");
        print $mou1->getCor();
        echo "<br>";
        $mou1->setLigado(1);
        print_r($mou1->getLigado());
        echo "<br>";
        var_dump($mou1);

    ?>
</body>
</html>