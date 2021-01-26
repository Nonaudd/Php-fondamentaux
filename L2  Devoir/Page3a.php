<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>
        <?php 
            echo 'Nom : '.$_POST["name"].'<br>';
            echo 'Prénom : '.$_POST["prenom"].'<br>'; 
        ?>
</body>
</html>