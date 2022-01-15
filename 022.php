<?php
// (Ltrim de left e rtrim de right :o)
$msg = "       Já almocei hoje uma   batata";

echo $msg . "<br>" . "<br>";

echo ltrim($msg, "Já") . "<br>"; // veja que não funciona, pois tem espaço 

echo $msg = ltrim($msg) . "<br>";// com espaço anterior removido

echo ltrim($msg, "Já") . "<br>";// removendo o "Já"

$msg2 = "Já almocei hoje uma   batata    ";

echo rtrim($msg2, "batata") . "<br>"; // veja que não funciona

echo $msg2 = rtrim($msg2) ; //removendo espaço
echo "<br>";
echo rtrim($msg2, "batata"); //removendo lasanha
echo "<br>";
echo $msg3 = "oi oi mundo oi";
echo "<br>";
echo trim($msg3, "oi");
?>