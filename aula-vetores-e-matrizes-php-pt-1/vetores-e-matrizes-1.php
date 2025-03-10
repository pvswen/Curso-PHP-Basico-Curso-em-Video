<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php
            //Como usar vetores e matrizes em PHP? - parte 1
            //Vetores em algoritmos

            // $n[0] = 3;
            // $n[1] = 7;
            // $n[2] = 5;
            // $n[3] = 4;

            // ou tambem: $n = array(3,7,5,4);

            //$n = 7; cria um $n[4] = 7;, coloca o 7 na quinta posição

            $n = array(3,5,7,2);
            $n[] = 7;
            print_r($n);

            //criando por Range - vai começar de 5, terminará em 20, e o passo será de 5 em 5. primeiro o valor inicial, no meio o valor final, e no final o valor que será somado até chegar ao valor final.

            $c = range(4,20,5);
           

            //foreach - significa para cada, será criada desta forma

            foreach($c as $valor){
                echo "$valor ";
            }

            //Chaves personalizadas - serve para colocar algo em indices personalizados

            $v = array(1=> "A", 3=>"B", 6=>"C", 8=>"D");
            $x = array(
                3=> "6",
                9=> "2",
                1 => "3"
            );

            print_r($x);
            print_r($v);

            //se eu colocar $v[] = 8, ele vai criar um $v[9] = 8;

            $v[] = 8;

            print_r($v);

            //unset - serve para desalocar um vetor de sua posição

            unset($v[9]);

            print_r($v);

            //Chaves associativas

            $cad = array("nome"=> "Ana",
            "idade"=>23,
            "peso"=>78.5,
            "fuma"=>true);

            print_r($cad);
            echo $cad["idade"];
            echo $cad["nome"];

            foreach($cad as $k => $c){
                echo "O campo $k possui o conteudo $c </br>";
            }

            //Matrizes em PHP

            $n = array(array(2,3),
                       array(3,4), 
                       array(9,5));
            echo $n[2][0]. "<br>";
            $n[2][0] = $n[1][1];
            echo $n[2][0];

            //[2]- significa linha 2, 0 significa coluna 0, ou seja, n2,0 vai passar a valer o valor de n 1,1.
        ?>


        <table border="1"><tr>
        <?php
            $c = range(4,20,5);
           

            //foreach - significa para cada, será criada desta forma

            foreach($c as $valor){
                echo "<td> $valor ";
            }
        ?></tr></table>
        </pre>
    </div>
</body>
</html>