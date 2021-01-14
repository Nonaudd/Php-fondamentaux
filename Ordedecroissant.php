<?php
//Initialiser 4 variables puis les ranger dans l'ordre décroissant.

$nb1=rand(0,20);
$nb2=rand(0,20);
$nb3=rand(0,20);
$nb4=rand(0,20);

$min=null;
$moy1=null;
$moy2=null;
$max=null;

if($nb1>$nb2){
    $min=$nb2;
    $max=$nb1;
}else{
  $min=$nb1;
  $max=$nb2;
}

if($nb3>$nb4){
    $moy1=$nb4;
    $moy2=$nb3;
}else{
  $moy1=$nb3;
  $moy2=$nb4;
}


echo "$max,$moy1,$moy2,$min";

?>