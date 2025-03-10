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
                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                }

                $i=1;
                
                while($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i : ".$$v . "<br/>";
                    $i++;
                }
            ?>
            <br>
            <a href="02-parte1.php">Voltar</a>
        </form>
    </div>
</body>
</html>