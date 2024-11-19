<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Resultado </title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sujeito";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido" ;
            echo "<p>Seja muito bem vindo $nome $sobrenome</p>";
            echo "<p>Este é meu site</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
</body>

</html>