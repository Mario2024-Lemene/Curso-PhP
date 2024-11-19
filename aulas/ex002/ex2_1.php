<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Short Open tag</title>
</head>
<body>
    <!-- apos realizar alterações no servidor php, coloquei On na opção short_open_tag (short_open_tag=On)  para que podessem funcionar pois no seu padrao nao funcionam-->
     <?
        echo "<h1>Tudo Funciona de Boas</h1>";
        print "<p>short open tag a funcionam</p>";
     ?>
</body>
</html>