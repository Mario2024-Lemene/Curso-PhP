<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavei e Constantes</title>
</head>
<body>
    <h1>Testando Variaveis e Constantes</h1>
    <?php 
        // as variaveis não necessitam de uma declaração, apenas de uma inicialização
        $nome = "Dolvino";
        $sobrenome = "Mario"; 
        const  PAIS = "Moçambique";
        echo "Muito prazer, $nome $sobrenome <br>";
        echo "Você mora em ". PAIS
    ?>
</body>
</html>