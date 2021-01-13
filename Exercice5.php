<?php
$anne=rand(1900,2090);
if(is_int($anne/4) and !is_int($anne/100) or is_int($anne/400)){
echo "$anne est bissextile.";
}else{
echo "$anne n'est pas bissextile.";
}
?>