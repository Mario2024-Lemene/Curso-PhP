<pre>
    <?php
        $inicio = date('m-d-Y', strtotime("-7 days")) ;
        $fim = date('m-d-Y') ;
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio .'%27&@dataFinalCotacao=%27'. $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    // a diferenca entre passar true e false é que true ira tratar essa variavel dados como uma arry e false ira tratar como um objecto
        $dados = json_decode(file_get_contents($url), true);
        // var_dump($dados);

        // esta a ser pegado o valor de uma arry dessa forma
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "<p>A cotação foi $cotacao</p>";
        echo "<p>O dia de hoje  é $fim</p>";
        echo "<p>O dia de hoje -7 dias $inicio</p>"
    ?>
</pre>