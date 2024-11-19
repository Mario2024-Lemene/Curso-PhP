<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>Gerando um numero aleatoirio de 0 a 100</p>
        <p>
            <?php 
                $min = 0;
                $max = 100;
                $random = mt_rand(0,100);
                echo "O valor gerado foi <strong>$random</strong>"
            ?>
        </p>
        <button onclick="javacript:windows.location.reload()">Gerar Novamente</button>
    </main>
</body>
</html>