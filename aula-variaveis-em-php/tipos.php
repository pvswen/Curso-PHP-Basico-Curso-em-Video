<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css">
    <title>Tipos</title>
</head>
<body>
    <div>
        <?php 
            $n = 4;
            echo "$n ";
            $no = "Gustavo";
            $n = 4.5;
            //utilizar typecast - $no = (int)"10Gustavo";
            //typecast é o tipo da variavel, se é logica, inteira, real, ou caractere, vinda da linguagem C.
            echo "$no e $n";

            $nome = "Ana";
            $idade = 18;

            echo "$nome tem $idade";
        ?>
    </div>
</body>
</html>