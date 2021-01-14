<?php
$val=rand(0,200);
$somme=null;
echo "Les nombres premiers entre 0 et $val sont : ";
        //On prend chaque nombre entre 2 et n (0 et 1 n'étant pas premier)
        for($first=2;$first<=$val;$first++){
            $nbDiv = 0;//Et on compte le nombre de diviseur    
            for($second=1;$second<=$first;$second++){
                if($first%$second==0){
                    $nbDiv++;            
                }
            }
        if($nbDiv == 2){
            echo $first.", ";
            }
        }
?>