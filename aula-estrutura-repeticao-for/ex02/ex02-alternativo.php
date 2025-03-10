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
        <form action="ex02.php">
            <select name="num" id="num">
                <?php
                    for ($c = 1; $c <= 10; $c++) { 
                        echo "<option value='$c'>$c</option>";
                    };
            
                ?>
            </select>
            
            <input type="submit" value="Tabuada" class="botao">
        </form>
        <br>
        <a href="ex02.html" class="botao">Voltar</a>
    </div>
</body>
</html>