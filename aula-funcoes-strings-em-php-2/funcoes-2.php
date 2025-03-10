<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //Como manipular Strings em PHP? - Parte 2
            //14.strtolower - diminui todas as letras de uma string

            $nome = "Gustavo Guanabara";
            print( $nome."<br>");
            print("Seu nome  " . strtolower($nome));

            //15.strtoupper - deixa em maiusculo todas as letras de uma string

            $nome = "Gustavo Guanabara";
            print( "<br>".$nome."<br>");
            print("Seu nome  " . strtoupper($nome));

            //16.ucfirst - coloca a primeira letra da string para maiusculas, o uc significa em maiusculo, mas n significa que as outras estarão em maiusculo.

            $nome = "gustavo guanabara";
            print("Seu nome é ". ucfirst($nome));
            
            $nome = "gusTavO gUanAbARa";
            print("Seu nome é ". ucfirst(strtolower($nome)));

            //17. ucwords - coloca a primeira letra de cada palavra como maiusculas

            $nome = "gustavo guanabara";
            print("Seu nome é ". ucwords($nome));

            //18.strrev (string reverse) - coloca a string ao contrario
            $nome = "gustavo guanabara";
            print("Seu nome é ". strrev($nome));
            //19. strpos - mostra a posição de uma substring contando das letras, PHP está em 17 pois até o local do primeiro P, possui 17 letras, caso mude para php em minusculo, nao conseguirá encontrar, impresso como falso, ou vazio em PHP.

            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "<br>A string foi encontrada na posição $pos";

            //20. stripos - basicamente a mesma coisa mas adiciona um i no strpos, o i vem de ignorar, pois ele vai ignorar a caixa

            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "PHP");
            echo "<br>A string foi encontrada na posição $pos";

            //21.substr_count - mostra quantas vezes uma substring (palavra) foi encontrada dentro de uma string

            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP");

            print("<br>PHP encontrando $cont vezes");

            //22. substr - (no primeiro exemplo)primeiro coloca a variavel, dps a primeira posição aonde irá percorrer, e dps a ultima posição, ela irá mostrar todas as substrings a qual ela percorreu, ou seja, de 0 a 5, mostra a palavra Curso, tambem pode colocar só a ultima posição, se colocar valores negativos, ele vai colocar as ultimas letras, se colocar substr($site, -5, 2) ele vai pegar as ultimas 5 letras, mas vai mostrar as primeiras duas letras destas 5

            $site = "Curso em Vídeo";
            $sub = substr($site, -5,3);
            print("<br>". $sub);

            //23. str_pad - vai fazer uma string caber em um determinado espaço

            $nome = "Guanabara";
            $novo = str_pad($nome,30,".",STR_PAD_LEFT);

            print("<br>". $novo);

            //24.str_repeat - ele vai gerar uma string varias vezes por um numero definido

            $txt = str_repeat("Php", 5);
            print("O texto gerado foi $txt");
            echo "<br>";
            print(str_repeat("-", 20));

            //25. str_replace - substitui uma substring por outra em uma string.

            $frase = "Gosto de estudar Matemática !!!";
            $novaFrase = str_replace("Matemática", "PHP", $frase);
            echo "$novaFrase";
        ?>
    </div>
</body>
</html>