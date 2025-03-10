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
            //for ($c = 1; $c <= 10; $c++){
            // echo $c;
            //};

            //Ex01 - mostrar várias contagens utilizando a estrutura for
            for ($c = 1; $c <= 10; $c++){
             echo " $c ";
            };
            echo "<br> <br>";

            //contagem progressiva
            $num = isset($_GET["num"]) ? $_GET["num"] : 0;
            for($c = 1; $num >= $c; $c++){
                echo "$c ";
            };
            echo "<br> <br>";

            //contagem regressiva
            for ($c= 100; $num <= $c ; $c--) { 
                echo "$c ";
            };

            echo "<br> <br>";

            //contagem de 2 em 2

            for ($c = 1; $num >= $c ; $c += 2) {
                echo "$c ";
            };
        ?>
        <br> <br>
        <a href="ex01.html" class="botao">Voltar</a>
    </div>
</body>
</html>