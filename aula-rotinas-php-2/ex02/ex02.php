<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //Como utilizar rotinas externas?

            // com include

            // ex: include "funcoes.php", a vantagem é qualquer alteração dentro de funcoes.php, será alterada em qualquer arquivo que tenha include "funcoes.php";

            //include significa incluir

            require "funcoes2.php";
            echo "<h1> Testando novas funções... </h1>";
            olamundo();
            mostrarValor(4);
            echo "<h2>Finalizando Programa...</h2>";

            //require - significa requerido, mesma finalidade o include, a diferença fica em conta de, caso o arquivo n exista ou seja corrompido, o include tentará continuamente a carregar normalmente, pelo require, pelo arquivo ser requerido, caso n exista ou seja corrompido, ele para de ler o arquivo.

            //include_once e require_once diferente do require e include podem ser acionado e carregado varias vezes, já o include_once e require_once carregam apenas uma vez, independente de quantas vezes vc queira incluir no arquivo php
        ?>
    </div>
</body>
</html>