<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
</head>

<body>
    <?php
    $valor1 = $_GET['valor1'] ?? 0;
    $peso1 = $_GET['pesoValor1'] ?? 1;
    $valor2 = $_GET['valor2'] ?? 0;
    $peso2 = $_GET['pesoValor2'] ?? 3;
    ?>
    <h1>Médias Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <p>
            <label for="inValor1">1* Valor: </label>
            <input type="number" name="valor1" id="inValor1" step="0.01" value="<?= $valor1 ?>">
        </p>
        <p>
            <label for="inPesoValor1">1* Peso: </label>
            <input type="number" name="pesoValor1" id="inPesoValor1" value="<?= $peso1 ?>">
        </p>
        <p>
            <label for="inValor2">2* Valor: </label>
            <input type="number" name="valor2" id="inValor2" step="0.01" value="<?= $valor2 ?>">
        </p>
        <p>
            <label for="inPesoValor1">2* Peso: </label>
            <input type="number" name="pesoValor2" id="inPesoValor2" value="<?= $peso2 ?>">
        </p>
        <p>
            <input type="submit" value="Calcular Médias">
        </p>
    </form>
    <main>
        <h2>Cálculos das Médias</h1>
        <?php 
            echo "<p>Analisando os valores ".$valor1." e ". $valor2 . "</p>";
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPonderada = (($valor1 * $peso1) +( $valor2 * $peso2))/ ($peso1 + $peso2);
            echo "<ul><li>A <strong>Média Aritémica Simples</strong> entre os valores é igual a ". number_format($mediaSimples,2, ",",".") ."</li>";
            echo "<li> A <strong>Média Aritémica Ponderada </strong> entre os valores é igual a ". number_format($mediaPonderada,2, ",",".") ."</li></ul>";
        ?>
    </main>
</body>

</html>