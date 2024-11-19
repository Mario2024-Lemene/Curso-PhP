<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter valores</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php 
                $valor = $_GET["valor"];
                $dolares = 6.01;
                $valorDolares = $valor/$dolares;
                //essa variavel so vai funcionar caso a biblioteca intl esteja ativada no php
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus <strong>". numfmt_format_currency($padrao,$valor,"pt_BT"). "</strong> corresponde a <strong>". numfmt_format_currency($padrao, $valorDolares, "USD") ."</strong>"
            ?>
        </p>
        <button onclick="javacript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>