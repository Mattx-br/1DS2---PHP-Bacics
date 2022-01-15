<?php

$busca = "nome";
$troca = "batata";
$frase = "oi, nome!";

$msg = str_replace($busca, $troca, $frase);
// parametros: 
// 1º busca a palavra a ser trocada
// 2º escolhe a palavra que substituirá a palavra escolhida
// 3º frase na qual terá essas trocas
echo $msg;


?>