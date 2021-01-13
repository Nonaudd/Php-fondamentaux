<?php
$nb1=rand(-20,20);
$nb2=rand(-20,20);
$nb3=rand(-20,20);
$min=null;
$moyen=null;
$max=null;
if($nb3>$nb1 and $nb3>$nb2 and $nb2>$nb1){
    $min=$nb1;
    $moyen=$nb2;
    $max=$nb3;
}
if($nb2>$nb1 and $nb2>$nb3 and $nb3>$nb1){
    $min=$nb1;
    $moyen=$nb3;
    $max=$nb2;
}
if($nb1>$nb2 and $nb1>$nb3 and $nb2>$nb3){
    $min=$nb3;
    $moyen=$nb2;
    $max=$nb1;
}
if($nb1>=$nb2 and $nb1>=$nb3 and $nb3>=$nb2){
    $min=$nb2;
    $moyen=$nb3;
    $max=$nb1;
}

  echo "Ordre décroissant donne $max,$moyen,$min";
  ?>