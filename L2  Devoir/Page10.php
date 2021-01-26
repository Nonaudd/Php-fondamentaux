<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>
<body>
  <p>Saisir les données du formulaire</p>
<form action="page4a.php" method="post">
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
    <?php 
        if (isset($_POST["Valider"])) {
            if( $_POST["Sexe"]=="M"){ $genre="masculin";}else{ $genre= "Feminin";}
            $nom=$_POST["Nom"];
            $prenom=$_POST["Prenom"];
            $mat=$_POST["matricule"];
            $ad=$_POST["Adresse"];
            $service=$_POST["Service"];
            $fonction=$_POST["Fonction"];
            $bd=new PDO("mysql: host=localhost dbname=Employer","root","");
            $t=$bd->query("INSERT INTO Employer VALUES($mat,$nom,$prenom,$genre,$ad,$service,$fonction)");
        }else if (isset($_POST["Reinitialiser"])) {
            header("Refresh:0");
        }
    $bd=new PDO("mysql: host=localhost dbname=Employer","root","");
    $ex=$bd->query("SELECT * From Employer");
    while ($donnee=$ex-> fetch()){
           echo $donnee["matricule"], $donnee["nom"], $donnee["prenom"], $donnee["adresse"], $donnee["genre"], $donnee["service"], $donnee["fonction"];
       }   
    ?>
</body>
</html>
