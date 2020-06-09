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

        // $reponse = $bdd->query('SELECT * FROM table_1');
        // while ($donnees = $reponse->fetch()){
        //     echo '<p>' . $donnees['id'] . '</p>';

        // }
        $reponse = $bdd->query('SELECT * FROM table_1 WHERE last_name="palmer"');
        while ($donnees = $reponse->fetch()){
            echo '<p>' . $donnees['id'] . ' - ' . $donnees['last_name'] . '</p>';

        }
    ?>
</body>
</html>