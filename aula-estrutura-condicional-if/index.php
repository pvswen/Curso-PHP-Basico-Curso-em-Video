<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Estrutura Condicional IF</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.nota {
            color:rgb(0, 94, 255);
        }
        span.aprovado{
            color:rgb(2, 255, 2);
        }

        span.reprovado{
            color:rgb(46, 1, 1);
        }

        span.recuperacao {
            color:rgb(255, 0, 0);
        }

        input[type=submit]{
            color: white;
            padding: 10px;
            margin: 10px 0px 10px;
            background-color:rgb(0, 34, 255);
            border: 1px black;
        }
    </style>
</head>
<body>
    <div>  
        <!-- <form action="index.php" method="get">
            <label for="ano">Ano de Nascimento: </label>
            <input type="number" name="ano" id="ano" placeholder="4 digitos">
            <input type="submit" value="Verificar">
        </form> -->
        <br>
        <form action="index.php" method="get">
            <label for="nota1">Nota 1: </label>
            <input type="number" name="nota1" id="nota1" placeholder="Insira a primera nota" step="0.5">
            <br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" step="0.5">
            <br>
            <input type="submit" value="Calular Média">
        </form>
        <?php 
            //Como criar condições em PHP?
            //if ( )
                //{   };

            //if ($idade >= 18){
            // $vota = true; 
            // $dirige = true;
            // } 
            // else {
            // $vota = false;
            // $dirige = false;
            // }

            // Exercício 01 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir

            // $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            // $i = date("Y") - $a;
            // echo "Você nasceu em $a e tem $i <br>";

            //if ($i >= 18){
            //    $v = "Pode votar";
           //     $d = "Pode dirigir";
            //} else {
            //    $v = "Não pode votar";
            //    $d = "Não pode dirigir";
            //}
            //echo "<br> Com essa idade voce $v e tmb $d";

            //Condições Aninhadas

            // if($i < 16) {
            //     $tipoVoto = "não vota";

            // } else if (($i >=16 && $i <= 18) || ($i > 65 )){
            //         $tipoVoto = "Não Obrigatorio";
            //     } else {
            //         $tipoVoto = "Obrigatório";
            // }
            

            // echo "Para essa idade o o voto é $tipoVoto";

            //Exercicio 03 - Calculo de média

            $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
            $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
            $m = ($nota1 + $nota2) / 2;
            if($m >= 7.0 && $m <= 10) {
                $m = "<span class='aprovado'>$m</span>";
                $s = "<span class='aprovado'>APROVADO</span>";
            } else if($m >= 5.0 && $m <= 7.0) {
                $m = "<span class='recuperacao'>$m</span>";
                $s = "de <span class='recuperacao'>RECUPERAÇÃO</span>";
            } else {
                $m = "<span class='reprovado'>$m</span>";
                $s = "<span class='reprovado'>REPROVADO</span>";
            }

            echo "O aluno tirou <span class='nota'>$nota1 </span> e <span class='nota'>$nota2</span>, sua média foi $m, por isso está $s";
        ?>

        <br><a href="index.php">Voltar</a>
    </div>
</body>
</html>