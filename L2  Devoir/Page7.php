<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
<p>Saisir les données du formulaire</p>
<form action="page7.php" method="get">
<div>
    MATRICULE: <input type="text" id="mat" name="matricule" placeholder="Matricule de l'employé" required/></br></br>
    Nom: <input type="text" id="nam" name="name" placeholder="Nom de lemployé" required/></br></br>
    Prémon: <input type="text" id="pren" name="prenom" placeholder="Prénom de l'employé" required/></br></br>
    <input type="submit" name="envoyer " value="Enregistrer" >
</div>
</form>

<table>
                <tr style="font-color:bolder">
                    <th style="border:1px solid black;">Matricule</th>
                    <th style="border:1px solid black;">Nom</th>
                    <th style="border:1px solid black;">Prenom</th>
                </tr>
                <tr>
                    <td style="border:1px solid black;"><?php echo $_GET["matricule"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["name"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["prenom"];?></td>
                </tr>
    </table>

</body>
</html>