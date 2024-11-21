<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu salário</title>
</head>
<body>
    <?php 
        $salario = $_GET['salario']??0;
        $salarioMinimo = 1380;
        
    ?>
    <h1>Informe seu salário</h1>
    <form action="<?$_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="inSalario">Salário</label>
            <input type="number" name="salario" id="inSalario" value="<?=$salario?>">
        </p>
        <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

    <h2>Resultado Final</h2>
    <p>
        <?php 
            $numSalario = (int) ($salario / $salarioMinimo);
            $restoSalario = $salario % $salarioMinimo;
            echo "Quem recebe um salário de $salario ganha <strong>$numSalario salários mínimos + $restoSalario</strong>";
        ?>
    </p>
</body>
</html>