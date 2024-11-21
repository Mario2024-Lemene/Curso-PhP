<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
</head>
<body>
    <?php 
    $num = $_GET['num']??0;
    ?>
    <h1>Infrome um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="inNum">Número:</label>
            <input type="number" name="num" id="inNum" value="<?=$num?>">
        </p>
        <p><input type="submit" value="Calcular Raizes"></p>
    </form>
    <h2>Resultado Final</h2>
    <?php 
        echo "<p>Analisando o número $num</p>";
        $quadradoNum = pow($num,1/2);
        $cubicoNum = pow($num, 1/3);
        echo "<ul><li>A sua raiz quadrada é <strong>". number_format($quadradoNum,3,",",".") ." </strong> ";
        echo "<li>A sua raiz cubica é <strong>". number_format($cubicoNum,3,",",".")."</li></ul>"
    ?>
</body>
</html>