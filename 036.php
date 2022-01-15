<?php

$p[0]["nome"]  = "Joaquim";
$p[0]["idade"] = 90; // teste tb trocando o valor daqui para 10
$p[1]["nome"]  = "Lindalva";
$p[1]["idade"] = 26;
$p[2]["nome"]  = "Ribamar";
$p[2]["idade"] = 44;

$i = -1;
$c = -1;

foreach($p as $id => $s){
    if($s["idade"] > $i){
        echo "i vale " . $i = $s["idade"] . "<br>";
        echo "c vale " . $c = $id;
        echo "<br>";
    }
}
echo $p[$c]["nome"];
?>