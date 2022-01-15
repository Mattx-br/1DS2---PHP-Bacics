<?php
// números aleatórios
$num = rand(1000, 7000);//parâmetros: 1º inicio(incluso) 2º fim (incluso)
echo "Numero sorteado: " . $num;
if ($num % 3 == 0){
    echo "<br>" . $num ." é múltiplo de 3";
}
else{
    echo "<br>" . $num ." NÃO é múltiplo de 3";
}

if($num % 2 == 0){
    echo "<br>" . $num ." é um numero par";
}
else{
    echo "<br>" . $num ." é um numero ímpar";
}

?>