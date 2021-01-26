<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>
     <?php
        echo 'Matricule : '.$_POST["matricule"].'<br>';
        echo 'Nom : '.$_POST["name"].'<br>';
        echo 'Prénom : '.$_POST["prenom"].'<br>';
        echo 'Adresse : ' .$_POST["adresse"].'<br>';
        echo 'Sexe : ' .$_POST["sexe"].'<br>';
        echo 'Service : ' .$_POST["service"].'<br>';
        echo 'Fonction : ' .$_POST["fonction"].'<br>';
    ?>
</body>
</html>