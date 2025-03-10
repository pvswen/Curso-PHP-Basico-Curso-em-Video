<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>
        <form action="exercicio02.php" method="get">
            Dia da Semana: <input type="number" name="ds" min="2" max="7" required>
        
            <input type="submit" value="Analisar">
        </form>
        <br>
        <a href="exercicio02.php">Voltar</a>
    <?php 
        //Exercicio 02 - Ler o dia da semana (2 - 7) e mostrar se precisa ou não ir pra escola

        $dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<br>Precisa ir pra escola";
                break;
            case 7:
            case 8:
                echo "<br>Dia de descanso.";
                break;
        }
    ?>
    </div>
</body>
</html>