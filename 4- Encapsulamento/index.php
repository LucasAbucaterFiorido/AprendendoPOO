<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo POO</title>
</head>
<body>
    <?php
        include_once("ControleRemoto.php");
        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->abrirMenu();
        $c1->play();
        $c1->mudoON();
        $c1->abrirMenu();
        $c1->mudoOFF();
        $c1->maisVolume();
        $c1->pause();
        $c1->abrirMenu();
        $c1->fecharMenu();
        $c1->desligar();
    ?>
</body>
</html>