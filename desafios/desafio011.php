<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $percentagem = $_GET['percentagem'] ??50;
    ?>
    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="inValor">Preço Produto (R$):</label>
            <input type="number" name="valor" id="inValor" step="0.001" value="<?=$valor?>">
        </p>
        <p>
            <label for="inPercent">Qual será o percentual de resjuste (<output id="outResposta">50</output>%)</label><br>
            <input type="range" name="percentagem" id="inPercent" oninput="outResposta.innerHTML = Number(inPercent.value)">
        </p>
        <input type="submit" value="Reajustar">
    </form>
    <main>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $aummento = ($valor * $percentagem/100) + $valor;
            echo "<p>O produto que custava $valor, com $percentagem% de aumento vai passar a custar $aummento</p>";
        ?>
    </main>
</body>
</html>