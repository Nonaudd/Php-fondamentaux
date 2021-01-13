<?php
$mois=rand(1,12);
$annee=rand(1900,2100);
if ($mois==1 or $mois==3 or $mois==5 or $mois==7 or $mois==8 or $mois==10 or $mois==12){
    echo "mois=$mois    annee=$annee   nbreJours=31";
}
if ($mois==4 or $mois==6 or $mois==9 or $mois==11){
    echo "mois=$mois    annee=$annee   nbreJours=30";
}
if($mois==2){
    if(is_int($anne/4) and !is_int($anne/100) or is_int($anne/400) ){
        echo "mois=$mois    annee=$annee   nbreJours=29";
    }
    else{
        echo "mois=$mois    annee=$annee   nbreJours=28";
    }
}
?>
