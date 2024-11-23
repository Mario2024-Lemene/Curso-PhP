<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inAno">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="inAno">
            <label for="inAnoD">Quer saber sua idade em que ano?</label>
            <input type="number" name="anod" id="inAnoD">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>
    <main>
        <h2>Resultado</h2>
        <p>Quem nasceu em [??] vai ter<strong> [??] anos</strong> em [??]!</p>
    </main>
</body>

</html>