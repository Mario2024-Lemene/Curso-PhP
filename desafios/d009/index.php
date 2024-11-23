<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $valor1 = $_GET['num1'] ?? 0;
    $peso1 = $_GET['peso1'] ?? " ";
    $valor2 = $_GET['num2'] ?? 0;
    $peso2 = $_GET['peso2'] ?? " ";

    ?>
    <main>
        <h1>Medias Aritmeticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inNum1">1ª Valor</label>
            <input type="number" name="num1" id="inNum1" required value="<?= $valor1 ?>" step="0.01">
            <label for="inPeso1">1ª Peso</label>
            <input type="number" name="peso1" id="inPeso1" min="1" value="<?= $peso1 ?>">
            <label for="inNum2">2ª Valor</label>
            <input type="number" name="num2" id="inNum2" required value="<?= $valor2 ?>" step="0.01">
            <label for="inPeso2">2ª Peso</label>
            <input type="number" name="peso2" id="inPeso2" min="1" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>
    <main>
        <?php
        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Calculo das Medias</h2>
        <p>Analisando os valores <?=number_format($valor1, 2, ",", ".")?> e <?=number_format($valor2, 2, ",", ".")?></p>
        <ul>
            <li>A <strong>Media Aritmetica Simples</strong> entre os valores é igual <?=number_format($mediaSimples, 2, ",", ".")?></li>
            <li>A <strong>Média Aritémetica Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mediaPonderada, 2, ",", ".")?></li>
        </ul>
    </main>
</body>

</html>