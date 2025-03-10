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
        <?php
            //Como criar repetições em PHP? (parte 1)
            // $c = 1;

            // while ($c <= 10){
            //     echo $c;
            //     $c++;
            // }

            //Ex 01 - mostre na tela uma contagem progressiva de 1 até 10

            $c = 1;

            while ($c <= 10){
                echo "$c </br>";
                $c++;
            }
            echo "<br>";
            $c = 10;

            while ($c >= 1){
                echo "$c </br>";
                $c -= 2;
            }
        ?>
    </div>
</body>
</html>