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
            $inicio = date('m-d-Y', strtotime("-7 days"));
            $fim = date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' . $inicio . '%27&@dataFinalCotacao=%27' . $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            // a diferenca entre passar true e false é que true ira tratar essa variavel dados como uma arry e false ira tratar como um objecto
            $dados = json_decode(file_get_contents($url), true);
            // var_dump($dados);

            // esta a ser pegado o valor de uma arry dessa forma
            //dessa forma o valor do dolare sera pegado de uma api
            $dolares = $dados["value"][0]["cotacaoCompra"];
            $valor = $_GET["valor"] ?? 0;
            //essa sera o valor do doral fixo
            //$dolares = 6.01;
            $valorDolares = $valor / $dolares;
            //essa variavel so vai funcionar caso a biblioteca intl esteja ativada no php
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus <strong>" . numfmt_format_currency($padrao, $valor, "pt_BT") . "</strong> corresponde a <strong>" . numfmt_format_currency($padrao, $valorDolares, "USD") . "</strong>"
            ?>
        </p>
        <p>
            Conversão de moeda usando uma API do <strong>Banco Central do Brasil</strong>
        </p>
        <button onclick="javacript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>