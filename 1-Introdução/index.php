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
        $mou1->modelo = "HyperX";      //modificando o modelo do mouse.
        $mou1->ligado = true;      //modificando o estado para ligado.
        $mou1->clicar("Esquerdo");  //função clicar e o parâmetro com o botão selecionado.
        echo "<br>";    //espaçamento.
        var_dump($mou1);
    ?>
</body>
</html>