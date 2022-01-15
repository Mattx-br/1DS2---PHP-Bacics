<?php
$a = true;
$b = false;

if($a && $b){
    echo "A e B são verdade";
}
else{
    echo "A ou B não é verdade";
}

if($a || $b){
    echo "<br>" . "Ambas OU pelo menos uma é verdade";
}
else{
    echo "<br>" . "Nenhuma é verdade";
}
if(!$a){
    echo "<br>" . "Variável A não é verdade";
}
else{
    echo "<br>" . "Variável A é verdade";
}
?>