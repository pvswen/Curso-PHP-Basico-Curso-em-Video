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
        //rotinas em multiplos parâmetros em PHP

        //$res = soma(3,4,8,1,2);

        //func_get_args() - pega todos os argumentos e coloca dentro de um vetor, colocando cada um em uma posição, ou seja, será no caso de $res, será soma( $p[0], $p[1], $p[2], $p[3], $p[4] );

        //func_num_args() - repassa o número de argumentos existentes, nesse caso são 4

        //ex 03 - realizar uma soma com multiplos parametros

        function soma(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;

            for($i=0; $i < $tot; $i++){
                echo "<br>".$p[$i];
                $s = $s + $p[$i];
            };
            
            return $s;
        }
        
        $r = soma(3,2,4,5,6,1,1,1);
        echo "A soma dos valores é $r";
        ?>
    </div>
</body>
</html>