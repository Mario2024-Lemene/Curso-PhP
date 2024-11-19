<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Resposta PHP</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $num = $_GET["num"];
                echo "O numero digitado foi $num<br>O seu sucessor é ". ($num + 1). "<br>O seu antecessor é ". ($num-1)
            ?>
        </p>
        <button onclick="javacript:history.go(-1)">Voltar Para pagina anterior</button>
    </main>
</body>
</html>