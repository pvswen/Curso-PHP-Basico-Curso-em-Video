<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <div>
        <?php 
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "<h2>Valores recebidos de $n1 e $n2</h2>";
            echo "A soma entre $n1 e $n2 é igual a ". ($n1+$n2);
            echo "<br> A subtração vale ". ($n1-$n2);
            echo "<br> A multiplicação vale ". ($n1*$n2);
            echo "<br> A divisão vale ". ($n1/$n2);
            echo "<br> O modulo vale ". ($n1%$n2);
            echo "<br> A média vale $m";
            //Operadores Aritméticos
            // Adição +
            //Subtração -
            //Multiplicação *
            //Divisão /
            //Módulo %

            //FUnções matemáticas

            //abs() - valor absoluto
            //pow() - potenciação
            //sqrt() - raiz quadrada
            //round() - arrendodamento (funciona para valores reais)
            //intval() - valor inteiro da variavel
            //number_format() - util para formatar numeros

            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "<br>Valores recebidos: $v1 e $v2";
            echo "<br> O valor absoluto de $v2 é ". abs($v2);
            echo "<br> O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
            echo "<br>A raiz de $v1 é ". sqrt($v1);
            echo "<br> O valor de $v2 arrendodado é ". round($v2); //tmb existe o ceil(sempre arrendoda pra cima) ou floor(sempre arredonda pra baixo)
            echo "<br>A parte inteira de $v2 é ", intval($v2);
            echo "<br> O valor de $v1 em moeda é ".number_format($v1, 2, ",", ".");
        ?>
    </div>
</body>
</html>