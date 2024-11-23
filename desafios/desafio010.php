<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
</head>
<body>
    <?php 
        $anoNasc = $_GET['anoNasceu'] ?? 1900;
        $anoAtual = $_GET['anoAtual'] ?? date("Y")
    ?>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="inAno">Em que ano você nasceu?</label>
            <input type="number" name="anoNasceu" id="inAno" >
        </p>
        <p>
            <label for="inAnoAtual">Quer saber sua idade em que ano?(autalmente em <strong><?=date("Y")?></strong>)</label>: 
            <input type="number" name="anoAtual" id="inAnoAtual" >
        </p>
        <p>
            <input type="submit" value="Qual sera minha idade?">
        </p>
    </form>
    <main>
        <h2>Resultado</h2>
        <p>
            <?php 

                $idade = intval($anoAtual) - intval($anoNasc);
                echo "Quem nasceu em $anoNasc vai ter $idade anos em $anoAtual"
            ?>
        </p>
    </main>
</body>
</html>