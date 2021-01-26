<?php


// Téléphone portable
    $tel = "77 370 72 99";
     
    if(preg_match("#[7][7][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel))
     
       echo "Le numéro du portable est vrai : $tel";
       else
       echo "Le numéro du portable est faux : $tel";
     
    // Affiche : Le numéro du portable est vrai : 06 01 01 01 01
 
?>
