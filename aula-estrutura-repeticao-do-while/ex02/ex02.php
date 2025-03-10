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
        //$c = 1;
        //do {
        //echo $c;
        // $c++;
        //     }while($c <= 10);

        //ex02 - Script para calcular o fatorial de um número inteiro.

        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        $c = $v;
        $fat = 1;

        echo "<h1> Calculando o fatorial de: $v </h1>";

        do {
            $fat = $fat * $c;
            $c--;
        } while ($c >= 1);

        echo "<h2>$v! = $fat</h2>";
    ?>
    <a href="ex02.html" class="botao">Voltar</a>
    </div>
</body>
</html>