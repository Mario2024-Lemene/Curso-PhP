<?php 
    $num = $_GET["numero"];
    $numInt = intval($num);
    $numFracional = $num - $numInt;
    echo "<p>O numero digitado foi $num</p>";
    echo "<p>A parte inteira é $numInt</p>";
    echo "<p>A parte fracional é $numFracional</p>";
?>