<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>
        <form action="02-parte2.php" method="get">

            <?php

                //Ex02 - Criar dinamicamente 5 caixas de texto em um formulario
                $c = 1;

                while ($c <= 5){
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'> </br>";
                    $c++;
                }

                
            ?>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>