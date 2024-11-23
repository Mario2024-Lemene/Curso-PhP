<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Desafio PHP</title>
</head>

<body>
    <?php
    $num = $_GET['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inNum">Numero: </label>
            <input type="number" name="numero" id="inNum" value="<?= $num ?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <main>
        <h2>Resultado Final</h2>
        <?php
        $raizQuadrada = pow($num, (1 / 2));
        $raizCubica =  pow($num, (1 / 3));
        echo "<p>Analizando o <strong>numero $num,</strong> temos</p>";
        echo "<ul>";
        echo "<li>A sua raiz quadrada é <strong>".number_format($raizQuadrada, 3, ".", ",")."</strong></li>";
        echo "<li>A sua raiz cubica é <strong>".number_format($raizCubica, 3, ".", ",")."</strong></li>";
        echo "</ul>";
        ?>
    </main>
</body>

</html>