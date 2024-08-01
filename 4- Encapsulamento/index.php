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
        include_once("ControleRemoto.php");     //incluindo classe no arquivo principal.
        $c1 = new ControleRemoto();             //criando um novo objeto da classe "ControleRemoto" nomeado "c1"
        $c1->ligar();                           //ligando eletronico com o controle remoto(c1).
        $c1->abrirMenu();                       //abrindo menu com o controle remoto(c1).
        $c1->play();                            //dando o play(reproduzindo) com o controle remoto(c1).
        $c1->mudoON();                          //colocando volume no mudo com controle remoto(c1).
        $c1->abrirMenu();                       //abrindo menu com o controle remoto(c1).
        $c1->mudoOFF();                         //tirando volume no mudo com controle remoto(c1).
        $c1->maisVolume();                      //aumentando volume com controle remoto(c1).
        $c1->pause();                           //dando o pause(interrompendo reprodução) com o controle remoto(c1).
        $c1->abrirMenu();                       //abrindo menu com o controle remoto(c1).
        $c1->fecharMenu();                      //fechando menu com o controle remoto(c1).
        $c1->desligar();                        //desligando eletronico com o controle remoto(c1).
    ?>                        
    <!-- abrindo PHP -->
</body>
</html>