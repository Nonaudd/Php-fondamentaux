<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Saisir les données du formulaire</p>
<form action="page5.php" method="get">
    Matricule <br> <input type="text" name="matricule"/></br>
     Nom <br> <input type="text" name="name"/></br>
     Prenom:<br> <input type="text" name="prenom"/></br>
     Sexe : <input type="radio" name="sexe" value="Homme" checked> Masculin 
            <input type="radio" name="sexe" value="Femme"> Féminin </br>
    Adresse </br><input type="text" name="adresse" size="40"></br>
    Service : </br><SELECT name="service">
    <OPTION>Choisir
    <OPTION>Informatique
    <OPTION>Administrative
    <OPTION>Juridique
    <OPTION>Marketing
    </SELECT></br>
    Fonction : </br><SELECT name="fonction">
    <OPTION>Choisir
    <OPTION>Directeur
    <OPTION>Comptable
    <OPTION>Juriste
    <OPTION>Chargé de communication
    </SELECT></br></br>
     <input type="submit" values="Valider"/>
     <input type="reset" value="Réinitianiliser">
</form>
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