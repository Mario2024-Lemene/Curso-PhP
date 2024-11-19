<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes  de base numericas</title>
</head>
<body>
    <?php 
        $num = intdiv(5,4);
        $max = max(3,5,1,4) ;
        echo "<p>A divisao inteira entre 5 e 4 deu $num</p>";
        echo "<p>O valor maximo corresponde a $max</p>";
        $raiz = sqrt(81);
        $potencia = pow(5,2);
        echo "<p>Raiz quadrada de 81 é igual a $raiz <br> 5 elevado a 2 é igual a $potencia</p>";
    ?>
</body>
</html>