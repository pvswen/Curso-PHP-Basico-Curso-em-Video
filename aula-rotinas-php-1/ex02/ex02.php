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
        //rotinas em algoritmos

        //8:20

        // function soma ($a,$b) {
        //     $s = $a + $b;
        //     return $s;
        // }

        // $res = soma(3,5);
        // echo $res;

        //ex 02 - Criar uma função que some dois valores númericos inteiros

        function soma ($a, $b){
            $s = $a + $b;
            return $s;

            //também pode ser return $a + $b;, o resultado será o mesmo no final
        }

        $x = 30;
        $y = 40;

        $res = soma($x, $y);
        echo "A soma entre $x e $y é $res";

        
        ?>
    </div>
</body>
</html>