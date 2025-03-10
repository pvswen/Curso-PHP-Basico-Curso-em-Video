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
            //Como criar rotinas em PHP - parte 2

            //Formas de envios de paramêtros


            //Passagem por Valor
            // function teste($x){
            //     $x = $x + 2;
            //     echo $x;
            // }

            // $a = 3;
            // teste($a);
            // echo $a;

            // //Passagem por Referência
            // function teste2(&$y){
            //     $y = $y + 2;
            //     echo $y;
            // }

            // $b = 5;
            // teste2($b);
            

            //EX01 - criar um procedimento que use a passagem de parâmetros por referência

            function teste(&$x){
                $x += 2;
                echo "O valor de X é $x";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";

            //colocar o & faz com que qualquer mudança na variavel x, seja aplicada em a, pois a variavel a tem como referencia a variavl x.
            
        ?>
    </div>
</body>
</html>