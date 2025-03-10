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
            //Ex02 - Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10

            $num = isset($_GET["num"]) ? $_GET["num"] : 0;

            for($c = 1; $c <= 10; $c++){
                $m = $num * $c;
                echo "<br> $num x $c = $m";
            };
        ?>
        <br><br>
    
    <a href="ex02.html" class="botao">Voltar</a>
    <a href="ex02-alternativo.php" class="botao">Alternativo</a>
    </div>
    
</body>
</html>