<?php

$idade = rand(0, 110);

echo "a idade é ". $idade . " anos, logo é ";

if($idade < 10) echo "criança";

elseif ($idade < 20) echo "jovem";

elseif($idade < 60) echo "adulto";

else echo "idoso"; 

?>