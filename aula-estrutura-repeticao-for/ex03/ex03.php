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
        $num = isset($_GET['num'])?$_GET['num']:"[valor não definido]";
        $cont = 0;
        echo "<h3>Analisando o numero $num...</h3>";
        echo "Valores múltiplos: ";
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $valoresMultiplos = $i;
                $cont++;
                echo "$valoresMultiplos ";
            }
        }
        echo "<p>Total de múltiplos: $cont</p>";
        if($cont == 2){
            echo "<p>Resultado: <span class='foco'>$num É PRIMO!</span></p>";
        }else{
            echo "<p>Resultado: <span class='foco'>$num NÃO É PRIMO!</span></p>";
        }
    ?>
    
    <br> <br>
    <a href="ex03.html" class="botao">Voltar</a>
    </div>
</body>
</html>