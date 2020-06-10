<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $servername = "localhost";
    $username = "soniah";
    $password = "mW3SxOh6/3S+gQ==";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=soniah_base-de-donnees", $username, $password);
      $conn->exec('SET NAMES utf8');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }


    // try {
    //     $bdd = new PDO('mysql:host=localhost;dbname=apprenants', 'root', '');
    //     $bdd->exec('SET NAMES utf8');
    //     var_dump ($bdd);    
    // } catch (PDOException $e) {
    //     $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : <br>' . $e->getMessage();
    //     die($msg);
    //     }



        // $reponse = $bdd->query('SELECT * FROM table_1');
        // while ($donnees = $reponse->fetch()){
        //     echo '<p>' . $donnees['id'] . '</p>';

        // }
        // $reponse = $bdd->query('SELECT * FROM table_1 WHERE last_name="palmer"');
        // while ($donnees = $reponse->fetch()){
        //     echo '<p>' . $donnees['id'] . ' - ' . $donnees['last_name'] . '</p>';

        // }
        echo "<h1>ACS de besançon</h1> 
                <h2>Liste des apprenants et leur département de résidence</h2>";
                
            $reponse = $conn->query('SELECT Nom, nom_departement FROM membres_acs INNER JOIN departements_acs ON membres_acs.num_departement = departements_acs.num_departement');
            while ($donnees = $reponse->fetch()){
               echo '<p>' . $donnees['Nom'] . ' - ' . $donnees['nom_departement'] . '</p>';
            }
//         SELECT * FROM membres_acs INNER JOIN departements_acs ON membres_acs.num_departement = departements_acs.num_departement
// SELECT Nom, nom_departement FROM membres_acs INNER JOIN departements_acs ON membres_acs.num_departement = departements_acs.num_departement
?>
</body>
</html>