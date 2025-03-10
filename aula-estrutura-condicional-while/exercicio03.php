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
            //Exercicio 03 - Criar um contador personalizavel com inicio e final, com um incremento

            $inicio = $_GET["inicio"];
            $final = $_GET["final"];
            $incremento = $_GET["incremento"];

            if($inicio < $final) {
                while ($inicio <= $final){
                    echo $inicio . "<br>";
                    $inicio += $incremento;
                } 
            } elseif ($inicio > $final) {
                while($inicio >= $final){
                    echo "$inicio <br>";
                    $inicio -= $incremento;
                }
            }
        ?>

    <p><a href="exercicio03.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>