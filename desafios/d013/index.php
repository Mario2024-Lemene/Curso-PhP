<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        .nota{
            width: 70px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $valor = $_GET['nota'] ?? 5;
    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inNota">Qual valor você deseja sacar?(R$) <sup>*</sup></label>
            <input type="number" name="nota" id="inNota" step="5" min="5" value="<?=$valor?>">
            <p style="font-size: 0.7em;">Notas disponiveis: R$100, R$50 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $saque = $valor;
        $saque100 = (int)($valor/ 100);
        $saque %= 100;

        $saque50 = (int)($saque/ 50);
        $saque %= 50;

        $saque10 = (int)($saque/ 10);
        $saque %= 10;

        $saque5 = (int)($saque/ 5);
    ?>
    <main>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="100 reais" class="nota"> <?=$saque100?></li>
            <li><img src="img/50-reais.jpg" alt="50 reais" class="nota"> <?=$saque50?></li>
            <li><img src="img/10-reais.jpg" alt="20 reais" class="nota"> <?=$saque10?></li>
            <li><img src="img/5-reais.jpg" alt="5 reais" class="nota"> <?=$saque5?></li>
        </ul>
    </main>
</body>
</html>