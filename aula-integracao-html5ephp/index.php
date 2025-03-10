<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css">
    <title>Integração PHP com HTML</title>
    <?php 
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt" ;
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000" ;
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>

        <!-- <form method="get" action="index.php">
            <input type="text" name="v">
        </form> -->

        <!---<form action="index.php" method="get">
            <h2>Insira o valor da raiz quadrada</h2>
            <input type="text" name="raiz" id="raiz">
            <input type="submit" value="Calcular Raiz">
        </form> -->

        <!--<?php 
            //Como obter dados de formulários

            //$valor = $_GET["v"];

            //echo "Digitou $valor";

            //$v = $_GET["v"];
            //$v = $_POST["v"];

            //Calculo de Raiz Quadrada
            $r = $_GET["raiz"];

            echo "O valor inserido foi: $r";

            $raizQuadrada = sqrt($r);

            echo "<br>A raiz de $r é " .number_format($raizQuadrada, 2);
        ?>-->

        <form action="index.php" method="get">
            Nome: <input type="text" name="nome"><br>
            Ano de nascimento: <input type="number" name="ano" id="ano">
            <fieldset><legend>Sexo</legend>
                <input type="radio" value="homem" name="sexo" id="masc" checked>
                <label for="masc">Masculino</label>
                <input type="radio" name="fem" id="fem" value="mulher">
                <label for="fem">Feminino</label>
            </fieldset><br>

            <input type="submit" value="Enviar">
            
        </form>

        <?php 

            ////Exercício 02 - Ler o nome, ano de nascimento e sexo de uma pessoa, monstrando sua idade atual.

            $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
            $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[Não informado]";
            
            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos";

        ?>

        <br><a href="./index.php">Voltar</a>

    </div>

    <div>
        <form action="index.php" method="get">
            <label for="itxt">Texto:</label>
            <input type="text" name="t" id="itxt"> <br/>
            <label for="itam">Tamanho:</label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select> <br>

            <label for="icor">Cor:</label>
            <input type="color" name="cor" id="icor"> <br>
            <input type="submit" value="Gerar">
        </form>

        <?php

            echo "<span class='texto'>$txt</span>";
            
        ?>

        <br><a href="./index.php">Voltar</a>
    </div>
</body>
</html>