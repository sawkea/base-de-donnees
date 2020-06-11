<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acs_besancon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    //connexion PDO distant
    $servername = "localhost";
    $username = "soniah";
    $password = "mW3SxOh6/3S+gQ==";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=soniah_base-de-donnees", $username, $password);
      $conn->exec('SET NAMES utf8');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }


    // connexion PDO local
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    
    // try {
    //   $conn = new PDO("mysql:host=$servername;dbname=apprenants", $username, $password);
    //   // pour afficher les caractères spéciaux , accents
    //   $conn->exec('SET NAMES utf8');
    //   // affichage des erreurs de connexion du PDO
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    // } 
    // catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }

    // 
    ?>
        
        <header>
            <h1>ACS de besançon</h1>
                <h2>Liste des apprenants et leur département <br> de résidence</h2>
        </header>
           
            <main>
                <div class="bdd">
                    <?php
                        // la variable réponse = variable conn (plus haut de la base de donnees dans phpmydamin) qui affiche le nom des apprenants ainsi que le nom de leur département
                        // dans la table membres_acs et dans la table departements_acs avec leur colonne identique num_departement
                        $reponse = $conn->query('SELECT Nom, nom_departement FROM membres_acs INNER JOIN departements_acs ON membres_acs.num_departement = departements_acs.num_departement');
                        // tant que (variable données = la variable reponse elle va chercher et )
                        while ($donnees = $reponse->fetch()){
                        // affiche le nom de l'apprenant et celui du participant dans un tableau
                        echo '<table><tr><td>' . $donnees['Nom'] . '</td>  <td>' . $donnees['nom_departement'] . '</td></tr></table>';
                        }
                    ?>
                </div>
            </main>
            <footer>
                <p>Source : <em>Base de données ACS Besançon</em> - Sonia</p>
            </footer>

</body>
</html>