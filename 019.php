<?php

$a = "Batata";
$b = "";

if($a && $b){
    echo "A e B tem valor";
}
else{
    echo "A ou B não tem valor";
}

if($a || $b){
    echo "<br>" . "A ou B tem valor";
}
else{
    echo "<br>" . "nenhum tem valor";
}

if(!$a){
    echo "<br>" . "A não tem valor";
}
else{
    echo "<br>" . "A tem valor: " . $a;
}
if(!$b){
    echo "<br>" . "B não tem valor";
}
else{
    echo "<br>" . "B tem valor: " . $b;
}
?>


<!-- jeito da prof -->
<?php /*
$a="Olá mundão véio sem porteira";
$b="";
if ($a&&$b){
    echo "A E B tem valor<br>";
}else{    echo "A ou B não tem valor<br>";}
if ($a||$b){
    echo "A OU B tem valor<br>";
}else{    echo "Nenhum tem valor<br>";}
if (!$a){
    echo "A não tem valor<br>";
}else{    echo "A tem valor: ".$a."<br>";}
if (!$b){
    echo "B não tem valor<br>";
}else{    echo "B tem valor: ".$b;}
*/
?>