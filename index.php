<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=apprenants', 'root', '');
        var_dump ($bdd);    
    } catch (PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : <br>' . $e->getMessage();
        die($msg);
        }
    ?>
</body>
</html>