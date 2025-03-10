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
            //antes, na aula 5 do curso de PHP...

            //abs() - valor absoluto, pow() - potenciação, sqrt() - raiz quadrada, rount() - arredondamento, intval () - valor inteiro da variavel, number_format() - formatação

           //Funções para manipulações de String, possui o total de 25 funções 
        
           //1. função printf
           
            $prod = "leite";
            $preco = 4.5;
            echo "O $prod custa R$ ". number_format($preco,2);
            printf("<br> O %s está custando R$ %.2f <br>", $prod, $preco);

            //%s <- mostrar string
            // %f <- mostrar numero float
            //%.2f <- mstrar numero float formatado com duas casas decimais
            //%d - valor decimal( positivo ou negativo )
            //%u valor decimal sem sinal(apenas positivos)
            //%f valor real
            //%s string

            //2. função print_r - serve pra mostrar detalhes de uma variavel, principalmente se for um vetor

            $x[0] = 4;
            $x[1] = 1;
            $x[2] = 8;

            print_r($x);
            $x2 = array (3,4,2,"test",5,4,8);
            echo "<br>";
            print_r($x2);
            echo "<br>";
            var_dump($x2);
            echo "<br>";
            echo "<br>";
            var_export($x2);

            //3. função wordwrap - faz quebra por palavra, ou seja, se uma palavra tiver 5 letras, ele a quebra, colocar false no final gera quebra por palavra, o true gera quebra independente se a palavra tem mais de 5 letras.
            echo "<br>";
            $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da fundao wordwrap";
            $res = wordwrap($txt, 7, "<br>\n", true);
            echo $res;

            //4. função strlen - mostra o comprimento de uma string

            $txt = "Curso em Vídeo";
            $tamanho = strlen($txt);
            echo "<br>". $tamanho;

            //5. função trim

            $nome = "   José  da   Silva  ";
            echo "<br>". strlen($nome);
            $novo = trim($nome);
            echo "<br>". $novo;
            echo "<br>". strlen($novo);

            //6. função ltrim - parecido com o trim, mas elimina apenas os espaços do inicio, considerando os espaços do final

            $nome = "   José  da   Silva  ";
            echo "<br>". strlen($nome);
            $novo = ltrim($nome);
            echo "<br>". $novo;
            echo "<br>". strlen($novo);

            //7. rtrim - parecido com o trim, mas elimina apenas os espaços do final, considerando apenas os espaços iniciais

            $nome = "   José  da   Silva  ";
            echo "<br>". strlen($nome);
            $novo = rtrim($nome);
            echo "<br>". $novo;
            echo "<br>". strlen($novo);

            //8. str_word_count - entrega a quantidade de palavras dentro de uma string, o valor zero serve para contar as palavras, o 1 serve para criar o vetor que cada posição é uma palavra, o 2 altera as posições.

            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 2);
            print_r($cont);

            //9. função explode - é uma versao nova da antiga versao do str_word_count, ele vai procurar pelos espaços e em seguida qual a string que vai ser explodida dentro de um vetor

            $site = "Curso em Vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);

            //10. str_split - mostrar cada letra e colocar num indice.

            $nome = "Maria";
            $vetor = str_split($nome);

            //11.implode - adiciona algum caractere entre os vetores.

            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";
            $texto = implode("#", $vetor);
            print($texto);

            //12. chr - mostra exatamente que letra está em por exemplo, no numero 67

            $letra = chr(67);
            echo "A letra de código 67 é $letra";

            //13. ord - dará o codigo ASCII da letra inserida.

            $letra = "C";
            $cod = ord($letra);

            echo "O código da $letra é $cod";
        ?>
    </div>
</body>
</html>