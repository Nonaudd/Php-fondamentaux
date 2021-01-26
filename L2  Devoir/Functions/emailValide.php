<?php
 
    function emailValide($email){
    /* Validation d'adresses email avec filter_var () */
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "L'adresse email '$email' est valide.";
    } else {
        echo "L'adresse email '$email' est invalide.";
    }
}
    echo "<br/>Appel de la fonction emailValide() <br/>";
      $email="adjarassoul@gmail.com";
      emailValide($email)
?>