<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>
  <table>
                <tr style="font-color:bolder">
                    <th style="border:1px solid black;">Matricule</th>
                    <th style="border:1px solid black;">Nom</th>
                    <th style="border:1px solid black;">Prenom</th>
                    <th style="border:1px solid black;">Genre</th>
                    <th style="border:1px solid black;">Adresse</th>
                    <th style="border:1px solid black;">Service</th>
                    <th style="border:1px solid black;">Fonction</th>
                </tr>
                <tr>
                    <td style="border:1px solid black;"><?php echo $_GET["matricule"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["name"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["prenom"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["sexe"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["adresse"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["service"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["fonction"];?></td>
                </tr>
    </table>
</body>
</html>