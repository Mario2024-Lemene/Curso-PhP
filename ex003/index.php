<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste  de tipos Primitivos</h1>
    <?php 
    // 0 - numero octar 0x - numero hexadecimal 0b - numero binario
        $num = 01000;
        echo "O valor da variavel corresponde a $num <br>";
        var_dump($num);

        echo "<br>";
        $s = "false";
        var_dump($s);
        echo "<br>";
        
        $valor = (float)"34";
        var_dump($valor);
        // false quando imprimido escrever na tela retorna 0 - true quando  imprimido na tela retorna 1
        echo "<br>";
        $casado = false;
        var_dump($casado);
        echo "Eu sou bem $casado";

        //array em php, as arrays tambem nao podem ser impressas na tela
        echo "<br>";
        $numerosImpares = [1,3,5,7,9];
        // echo "$numerosImpares"; 
        var_dump($numerosImpares); //ira imprimir o valor do indice e o valor e o tipo primitivo
        //as arrays em php sao como em javaScript "gracas a DEUS"

        //criando uma classe em PHP
        class Pessoa{
            private String $nome;
            private int $idade;
            private bool $vivo;
        }
        $dolvino = new Pessoa;
        echo "<br>";
        var_dump($dolvino);
    ?>
</body>
</html>