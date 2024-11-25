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
    $preco = $_GET['precoProduto'] ?? 0;
    $reajuste = $_GET['ajuest'] ?? 50;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<? $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inPreco">Preco do Produto</label>
            <input type="number" name="precoProduto" id="inPreco" min="0.01" step="0.01" value="<?= $preco ?>">

            <label for="inAjuste">Qual sera o seu percentual de reajuste? <strong>(<output id="out">50</output>%)</strong> </label>

            <input type="range" name="ajuest" id="inAjuste" oninput="out.innerHTML = Number(inAjuste.value)" min="0" max="100">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <main>
        <?php
        $aumeto = (($preco * $reajuste) / 100) ;
        $precoFinal = $aumeto + $preco;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$reajuste?>% de aumetno</strong> vai passar a custar <strong>R$: <?=number_format($precoFinal, 2, ",", ".")?></strong> a partir de agora.</p>
    </main>
</body>

</html>