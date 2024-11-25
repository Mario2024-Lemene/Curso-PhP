<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
    $anoAtual = date("Y");
    $ano = $_GET['ano'] ?? 1900;
    $anoD = $_GET['anod'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inAno">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="inAno" min="900" value="<?=$ano?>" max="<?=$anoAtual?>">
            <label for="inAnoD">Quer saber sua idade em que ano? (atualmente estamos <strong><?=$anoAtual?></strong> )</label>
            <input type="number" name="anod" id="inAnoD" value="<?=$anoD?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>
    <main>
        <?php 
        $idade = $anoD - $ano;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano?> vai ter<strong> <?=$idade?> anos</strong> em <?=$anoD?>!</p>
    </main>
</body>

</html>