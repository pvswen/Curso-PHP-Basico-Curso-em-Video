<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>
    <?php
            //Condições de multiplos casos (Switch)

            //switch($op) {
            // case 1:
            //    echo "A";
            //   break;
            // case 2:
            //    echo "B";
            //    break;
            // default:
            // echo "Erro";
            // break;
            //}
            
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2);
                    break;
                default:
                    echo "erro";
                    break;
            }

        ?>
        <form action="exercicio01.php" method="get">
            Numero: <input type="number" name="num" id="num"> <br>
            <fieldset>
                <legend>Operação</legend>
                <input type="radio" name="oper" value="1" id="dobro" >
                <label for="dobro">Dobro</label>
                <input type="radio" name="oper" value="2" id="cubo"  checked>
                <label for="cubo">Cubo</label>
                <input type="radio" name="oper" value="3" id="raiz" >
                <label for="raiz">Raiz Quadrada</label>
            </fieldset>
            <input type="submit" class="botao" value="Calcular">
        </form>
    <br> <br>
        <a href="index.php">Voltar</a>
        <br>
        <?php
            echo "O resultado da operação foi $r";

            //Exercicio 02 - Ler o dia da semana (2 - 7) e mostrar se precisa ou não ir pra escola

            
        ?>
    </div>
</body>
</html>