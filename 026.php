<?php

$msg = "abcdefghijklmnopqrstuvwxyz";

echo "string: " . $msg;
/*

Substrings(substr()) Parâmetros: 
1º string a ser trabalhada
2º (inicio)índice do caracter(posição)(sempre começando do zero)
3º (fim)pega a partir do índice (se for nº negativo começa ao contrário(direita pra esquerda))
*/

echo "<br>" . "<br>" . substr($msg, 0, 1);
echo "<br>" . substr($msg, 0, 3);
echo "<br>" . substr($msg, 3, 5);
echo "<br>" . substr($msg, 10, -2);
echo "<br>" . substr($msg, 0, -12);
echo "<br>" . strlen($msg);
echo "<br>" . substr($msg, strlen($msg)-2, 1); // 26-2=24 é y, pega 1 letra a partir dele, logo, y;
echo "<br>" . substr($msg, strlen($msg)-24, 3);//26-24=2 é c, ent ele pega o c e mais 2, logo, cde
echo "<br>" . substr($msg, strlen($msg)-24, -1);//26-24=2 é c, ent ele pega do final da string e tira um do final, logo c até o y(pq ele tirou o z, q é o final da string)

// prova web II dia 30/09/2020
// $nomeCompleto = "anthony nunes";
// echo $nomeCompleto . "<br>";
// echo substr($nomeCompleto, 0, 7) . "<br>";
// echo substr($nomeCompleto, strlen($nomeCompleto)-5 , 5) . "<br>";

?>
<!-- extensão para animação na letra Power mode -->