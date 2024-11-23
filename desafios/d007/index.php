<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
    // no php desde as versoes 7 ate agora aceita o uso de underline como simbolo de separacao
        $salarioMinimo = 1_380.60;
        $salario = $_GET['salario'] ?? $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <!-- nos campos de entrada de dados dos formularios os dados nao podem estar formatados -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inSalario">Salario</label>
            <input type="number" name="salario" id="inSalario" step="0.01" value="<?=$salario?>" >
            <p>Considerando o salario minimo de<strong> R$:<?=number_format($salarioMinimo, "2", ".", ",")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $totalSalario = (int) ($salario / $salarioMinimo);
            $diferenca = $salario % $salarioMinimo;
            echo "<p>quem recebe um salarrio de R$: ".number_format($salario,2, ",",".")." ganha <strong>". $totalSalario." salarios minimo</strong> + R$:".number_format($diferenca, 2, ",", ".")." </p>"
        ?>
    </section>
</body>
</html>