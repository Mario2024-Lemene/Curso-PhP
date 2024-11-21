<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse: collapse;
            width: 100px;
        }
   
    </style>
    <title>Desafio 006</title>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo']??0;
        $divisor = $_GET['divisor']??0;
    ?>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="inValor1">Dividendo:</label>
            <input type="number" name="dividendo" id="inValor1" value="<?=$dividendo?>" >
        </p>
        <p>
            <label for="inValor2">Divisor: </label>
            <input type="number" name="divisor" id="invalor2" value="<?=$divisor?>">
        </p>
        <p><input type="submit" value="Enviar Dados"></p>
    </form>
    <table>
        <tr>
            <td ><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$dividendo%$divisor?></td>
            <td><?=intdiv($dividendo, $divisor)?></td>
        </tr>
    </table>
</body>
</html>