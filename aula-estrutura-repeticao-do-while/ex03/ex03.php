<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10.

            $num = isset($_GET["valor"]) ? $_GET["valor"] : 0;
            $c = 0;
            do {
                $mul = $num * $c;
                echo "<br>$num x $c = $mul";
                $c++;
            } while ($c <= 10);
            echo "<br>"
        ?>
        <br>
        <a href="ex03.html" class="botao">Voltar</a>
    </div>
</body>
</html>