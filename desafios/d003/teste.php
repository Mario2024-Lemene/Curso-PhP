<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversao de valores</title>
</head>
<body>
    <h1>Conversão de Valores em php</h1>
    <main>
        <?php   
        $num = 1000;
        echo "O valor digitado com 4 casas decimais corresponde a ". number_format($num,2,"."," ")."<br>";
        // number_format() essa é a maneira menos criativa de fazer as coisas porem ainda esta em uso e vejo o motivo disso
        $dolar = 65.9;
        $valorDolar = $num/$dolar;
        // o que vai vem na linha seguinte pode parecer assustador mas sera bom para casos reais

        //para que isso funcione deves habilitar a extensão intl no documento do php
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        // simmm nao entendi quase nada disso porem da para o gasto
        echo "O valor de ". numfmt_format_currency($padrao, $num, "pt_Pt") ." corresponde a ". numfmt_format_currency($padrao, $valorDolar, "USD");
        ?>
    </main>
</body>
</html>