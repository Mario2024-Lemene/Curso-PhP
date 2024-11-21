<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../ex004/estilo.css">
    <title>Exercicio PHP</title>
</head>

<body>
    <?php
    $value1 = $_GET['valor1'] ?? 0;
    $value2 = $_GET['valor2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inValor1">Valor 1:</label>
            <input type="number" name="valor1" id="inValor1" value="<?= $value1?>">
            <label for="inValor2">Valor 2:</label>
            <input type="number" name="valor2" id="inValor2" value="<?= $value2 ?>">
            <input type="submit" value="Somar" id="btSubmit">
        </form>
    </main>
   
    <main>
        <h2>Resultados dos Valores</h2>
        <?php 
            $soma = $value1 + $value2;
            echo "<p>A soma entre os valores $value1 e $value2 é <strong>$soma</strong></p>"
        ?>
    </main>
</body>

</html>