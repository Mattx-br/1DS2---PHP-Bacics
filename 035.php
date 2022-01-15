<?php

$x[0][0] = 15;
$x[0][1] = 6;
$x[1][0] = 2;
$x[1][1] = 5;

foreach($x as $v){ //mostra q tem 2 arrays
    echo $v . "<br>";
}

echo "<hr>";
// esse $x é um array, e o '=>' entra 1, mas nesse caso acha outro array
foreach($x as $p1 =>$v){//percorre todos
    echo "p1 é: " . $p1 . ", v é: " . $v . "<br>";
    //esse $v é o outro array, e o '=>' entra 1, e nesse caso acha um valor inteiro, o $z
    foreach($v as $p2 => $z){ //pega esse array V
        echo "p2 é: " . $p2 . ", z é: " . $z . "<br>"; //encontra 0 e 1
        echo $z . "<br>";
    }
}
/*
No php é possível trabalhar com arrays de mais de uma dimensão. Diferente de outras linguagens os arrays não precisam ter a mesma direção em cada uma das posições. Na verdade, o php aloca um array dentro de uma posição de outro array, com isso cada posição pode ter chaves e tamanhos

*/
?>