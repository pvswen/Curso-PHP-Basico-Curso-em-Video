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
            //Como criar rotinas em PHP?
            //- Parte 01

            // function soma ($a, $b){
            //     $s = $a + $b;
            //     echo $s;
            // };

            // echo soma(3,4);

            //ex 01 - criar um procedimento que some dois valores numericos inteiros

            function soma ($a, $b){
                $s = $a + $b;
                echo "<p> A soma vale $s";
            };

            soma(3,4);
            soma(8,2);
            $x = 9;
            $y = 15;
            soma($x, $y);
        ?>
    </div>
</body>
</html>