<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição</title>
    <link rel="stylesheet" href="./_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* $a = 1;
            $b = 3;
            $c = $c +5;
            $c += 5; */ // simplificação de $c + 5 o += é um operador com adição, so pode ser utilizado se a variavel de inicio fazer parte da expressão
            //$b += $a; 
            //$a++; <- incremento

            //Adição - $a += b
            //Subtração - $a -= $b
            //Multiplicação $a *= $b
            //Divisão $a /= $b
            //Modulo $a %= $b
            //Concatenação: $a .= $b ou $a ,= $b

            //Exercicio 01 - aplicar 10% de desconto ao preço de um produto

            $preco = $_GET['p'];
            echo "O preço recebido é de R$ $preco";

            $preco += ($preco *10/100);

            echo "<br>O aumento do preço é de R$ ".number_format($preco, 2);

            $preco -= ($preco * 10/100);

            echo "<br>Com desconto de 10% será R$ ".number_format($preco, 2);

            //Operadores de incremento

            //Pré-incremento: $a = $a + 1 ++$a, primeiro incrementa e dps faz o uso da variavel

            //Pós-incremento: a mesma formula assim $aa++, incrementa primeiro e dps faz uso da variavel

            //Pré-decremento: $a = $a - 1 --$a, primeiro diminui e dps faz o uso da variavel

            //Pós-decremento: $a = $a - 1 $a--, primeiro usa a variavel e dps diminui

            //Exercicio 02 - Mostrar qual foi o ano anterior ao ano atual.

            $atual = $_GET["aa"];
             
            echo "<br> O ano atual é: $atual, e o ano anterior é ", --$atual;

            //Como fazer comentarios?

            // com // ou /* */ ou #

            //Como fazer referencia entre variaveis?

            //$a = 3;
            //$b = $a;
            //$b += 5 ou seja b é igual a 8;
            //echo $a = 3;
            //echo $b = 8;
            
            //$a = 3;
            //$b = &$a; quando coloca & na frente de uma variavel em php, significa que b seja uma referencia a $a, ou seja estão se ligando por referencia, entao cria uma variavel referenciada a $a, ou seja inicia o valor com 3, ou seja, quando colocamos $b += 5; ele fara com que tanto $a quanto $b tenham o valor 8 devido a soma.


            //Exercicio 03 - Praticar referencia entre variaveis
            $a = 3;
            echo "<br>A variavel de A é $a";
            $b = &$a;
            $b += 5;

            echo "<br>A variavel A vale $a";
            echo "<br>A variavel B vale $b";

            //Variaveis de variaveis

            $site = "cursoemvideo";
            $$site = "cursoPHP";

            echo "<br>$site";
            echo "<br>$cursoemvideo";

            //Exercicio 04 - Vamos praticar o uso de variaveis de variaveis

            $x = "abc";
            $$x = "def";

            echo "<br> O conteúdo da variavel X é $x";
            echo "<br> A variavel da variavel X criada recebeu o valor de $abc";
        ?>
    </div>
</body>
</html>