<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex004/estilo.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "Segunda", time()+3600);
                session_start();
                $_SESSION["teste"] = "Simmmm";
                echo "<h1>SuperGlobal GET</h1>";
                var_dump($_GET);
                echo "<h1>SuperGlobal POST</h1>";
                var_dump($_POST);
                echo "<h1>SuperGlobal REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>SuperGlobal COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>SuperGlobal ENV</h1>";
                var_dump($_ENV);
                
                echo "<h1>SuperGlobal SERVER</h1>";
                var_dump($_SERVER);
                // essa superGlobal é muito util 
                echo "<h1>SuperGlobal GLOBALS</h1>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>