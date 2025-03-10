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

        //exercicio 01 - Mostrar uma contagem progressiva de 1 até 10

        $c = 1;

        do {
            echo "$c ";
            $c+=1;
        } while ($c <= 10);

        $c = 10;

        do {
            echo "$c ";
            $c--;
        } while ($c >=1);
    ?>
    </div>
</body>
</html>