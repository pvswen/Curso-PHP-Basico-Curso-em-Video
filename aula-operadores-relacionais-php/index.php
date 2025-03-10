<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            //Operadores Relacionais

            //Maior >
            //Menos <
            //Maior ou igual >=
            //Menor ou igual <=
            //Diferente ! ou <>
            //Igual == testa se sao iguais independente do tipo
            //Idêntico $a === $b a diferença é testar se são identicas tanto em igualdade quanto em tipo

            //Operador Unário - ?  :

            //expressão ? verdadeiro : falso
            //$a > b ? $a : $b
            //$maior = $a>b ? $a : $b

            //$r = $a>$b ? $a+b : $a - $b
            
            //Exercício 01 - Permitir que o usuário escolha entre somar e multiplicar dois números.

            $n1 = $_GET["a"];

            $n2 = $_GET["b"];

            $tipo = $_GET["op"];

            echo "Os valores de $n1 e $n2 <br>";

            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

            echo "O resultado será $r";

            $a = 3;

            $b = "3";

            $r = ($a === $b) ? "A e B são iguais e do msm tipo"  : "A e B não iguais e nem são do msm tipo" ;

            $s = ($a == $b) ? "A e B são iguais" : "A e B não são iguais";

            echo "<br>",$r;
            echo "<br>", $s,"<br>";
            
            //Exercicio 03 - mostrar a situação de um aluno de acordo com a sua nota

            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2) / 2;

            echo "A média entre $nota1 e $nota2 é $m";

            //$situacao = ($m > 7.0) ? "APROVADO" : "REPROVADO" ;
            
            echo "<br> A situação do aluno é ". (($m > 7.0) ? "APROVADO" : "REPROVADO");
            
            //Operadores Lógicos

            // o Operador "E" é representado por and ou &&, aquele que para ser verdadeiro, todas tem que ser verdadeiras

            //o Operador "OU" é representado por or ou ||, aquele que para ser verdadeiro, basta ter um elemento verdadeiro

            //o Operador "XOU" é representado por xor, aquele que para ser verdadeiro, tem que ser verdadeiro ou falso, nunca apenas como verdadeiro ou como falso

            //o Operador "NÃO" é representado por not ou !, é o contrario, o verdadeiro é falso e o falso é verdadeiro

            //Exercício 04 - Mostrar se um eleitor é obrigado a votar ou não

            $ano = $_GET["an"];
            $idade = 2025 - $ano;
            echo "<br>Quem nasceu em  $ano tem idade de $idade";
            $tipo = ($idade >= 18 && $idade <= 65) ? "Obrigatório" : "Não Obrigatório";

            echo "<br>E dessa forma seu voto é $tipo";
            ?>
    </div>
</body>
</html>