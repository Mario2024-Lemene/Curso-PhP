<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl  e>Manipulação de Strings</title>
</head>

<body>
    <h1>Manipulação de strings</h1>
    <h3>Single quoted and double quoted</h3>
    <?php
    $nome = "Dolvino";
    $sobreNome = "Mario";
    echo  "<p>Muito bem vindo $nome \u{1F596}</p>"; //aspas duplas processa o conteudo
    echo '<p>Muito bem vindo $nome \u{1F596}</p>'; //aspas simples não processa o conteudo

    const PROVINCIA = "Maputo"; //nas constantes devemos usar o operador de concatenação para poder imprimir o seu valor
    echo "<p>Moro na provincia de PROVINCIA<p>"; // nao ira mostrar o valor da constante provincia 
    echo '<p>Moro na provincia de PROVINCIA<p>';
    echo "<p>Moro na provincia de  " .PROVINCIA ."<p>";
    echo "<p>Estamos no ano de ".date('Y') ."</p>"; // .date('y') retorna o ano atual do servidor

    //em php podemos tambem usar sequencia de escape 
    echo "Seja muito em vindo $nome $sobreNome vulgo \"Gostoso\" \\";
    ?>
</body>

</html>