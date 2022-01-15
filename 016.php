<?php

$x = "10";
$y = 10;

echo "x = " . $x . "<br>" . "y = " . $y . "<br>";

if ($x == $y) { //iguais em valor/conteúdo
    echo "iguais em valor";
}
else{
    echo "diferentes em valor";
}

if ($x === $y){ //iguais em valor e tipo (=== conhecido como estritamente igual)
    echo "<br>" . "iguais em valor e tipo";
}
else{
    echo "<br>" . "diferentes em valor e tipo";
}

if ($x != $y){ //negação de igualdade de valor/conteúdo
    echo "<br>" . "diferentes em valor";
}
else{
    echo "<br>" . "iguais em valor";
}

if($x !== $y){ //negação de igualdade de valor E tipo
    echo "<br>" . "diferentes em valor e tipo";
}
else{
    echo "<br>" . "iguais em valor e tipo";
}
?>

<!-- Jeito da prof
<?php /*
$x="10";
$y=10;
echo "x= ".$x."<br>"."y= ".$y."<br>";
if ($x==$y){   //iguais em valor/conteúdo
    echo "iguais em valor";
}
   else{ 
    echo "diferentes em valor";   
}
if ($x===$y){    // iguais em valor e tipo  ESTRITAMENTE IGUAL
    echo "<br>iguais em valor e tipo";
}
   else{ 
    echo "<br>diferentes em valor e tipo";  
}
if ($x!=$y){     // negação de igualdade de valor/conteúdo
    echo "<br>diferentes em valor";
}
   else{ 
    echo "<br>iguais em valor";    
}
if($x!==$y){      //negação de igualde em valor E tipo
    echo "<br>diferentes em valor e tipo";
}
   else{ 
    echo "<br>iguais em valor e tipo";   
}*/
?>
-->