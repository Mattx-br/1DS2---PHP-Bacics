<?php

echo "<style>.bolo{height: 200px; width: 300px}</style>";

$bolo = ["choc", "baun", "lim", "mil", "fu"];

$sabor = rand(0, 4);

switch($bolo[$sabor]){
    case "choc": 
        echo "Bolo de chocolate" . "<br><br>";
        echo "<img class='bolo' src='img\boloChocolate.jpg'>";
    break;
    case "baun": 
        echo "Bolo de baunilha" . "<br><br>";
        echo "<img class='bolo' src='img\boloBaunilha.jpg'>";
    break;
    case "lim": 
        echo "Bolo de limão" . "<br><br>";
        echo "<img class='bolo' src='img\boloLimao.jpg'>";
    break;
    case "mil": 
        echo "Bolo de milho" . "<br><br>";
        echo "<img class='bolo' src='img\boloMilho.jpg'>";
    break;
    case "fu": 
        echo "Bolo de fubá cremoso" . "<br><br>";
        echo "<img class='bolo' src='img\boloFuba.jpg'>";
    break;
}
?>