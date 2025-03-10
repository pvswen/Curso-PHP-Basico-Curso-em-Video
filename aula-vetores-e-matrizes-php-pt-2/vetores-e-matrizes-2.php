<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
    <?php
        //Como fazer vetores e matrizes em PHP - Parte 2
        // $n = array(3,5,8,2);

        // foreach($n as $v){
        //     echo $v;
        // }
        
        //Exibindo vetor
        //print_r($n) <- serve para mostrar qualquer objeto que seja uma coleção, msm n sendo um vetor
        $v = array(1,2,3,"K");
        print_r($v);
        //dica: colocar tag pre do HTML para ficar pré-formatado.
        //var_dump parecido com o print_r mas de forma mais complexa pois mostra o tipo de cada indice
        var_dump($v);

        //COntando itens
        //count() - conta quantos elementos possui em um array
        echo "O vetor tem ". count($v) ." elementos";
        $v[] = "M";
        print_r($v);

        //Gerenciando os últimos elementos

        //array_push() - ele vai colocar um valor no final de um vetor
        $n = array(3,5,8,2,7);
        array_push($n, 7);
        print_r($n);
        //array_pop() - tira o ultimo elemento de um vetor
        array_pop($n);
        print_r($n);

        //Gerenciando os primeiros elementos
        //array_unshift - coloca um elemento no inicio do vetor
        //array_shift - remove o primeiro elemento de um vetor
        array_unshift($n, 7);
        print_r($n);
        array_shift($n);
        print_r($n);

        //Ordenando elementos

        //sort() - serve para ordenar em ordem do menor para o maior
        $n = array(3,5,8,2);
        sort($n);
        print_r($n);

        //Ordem reversa
        //rsort() - serve para ordenar de forma decrescente, do maior para o menor

        rsort($n);
        print_r($n);

        //Ordenação associativa
        //asort() - vai colocar o vetor em ordem, mas manter a associatividade dos indices, ou seja, 3,5,8,2, vai ser, 2[3], 3[0], 5[1], 8[2], ele serve para ordenar do menor para o maior, mas nao mudando suas posições de indice

        asort($n);
        print_r($n);

        //Ordenação associativa reversa - vai reverter a associatividade dos indices, ou seja 8[2], 5[1], 3[0], 2[3]

        arsort($n);
        print_r($n);

        //Ordenação por chaves - os indices tmb podem ser chamados de chave, os valores serao ignorados, o que importa é a ordenação dos indices, ou seja, virará: M,A,X,K,J.
        
        $n = array(2=>"A", 5 => "J", 0=>"M", 3=>"X", 4=>"K");
        ksort($n);
        print_r($n);

        //Ordenação por chaves reversas - os indices tmb podem ser chamados de chave, os valores serao ignorados, o que importa é a ordenação dos indices, mas desta vez será ao contraio ou seja, virará: J, K, X, A, M
        
        $n = array(2=>"A", 5 => "J", 0=>"M", 3=>"X", 4=>"K");
        krsort($n);
        print_r($n);
    ?>
        </pre>
    </div>
</body>
</html>