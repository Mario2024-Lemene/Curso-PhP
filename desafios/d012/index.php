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
    $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="inSegundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="inSegundos" value="<?= $segundos ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <main>
        <?php
        // fara com que apontem para o mesmo lugar na memoria ram
        $sobra = (int)$segundos;
        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        $dias = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        $min = (int)($sobra / 60);
        $seg = $sobra % 60
        ?>
        <h2>Totalizando Tudo</h2>
        <p>Analiznado o valor que você digitou <strong><?= number_format($segundos,0,",",".") ?> segundos</strong>, equivalem a um total de: </p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $min ?> minutos</li>
            <li><?= $seg ?> segundos</li>
        </ul>
    </main>
</body>

</html>