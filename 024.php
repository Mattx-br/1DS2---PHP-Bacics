<?php

echo $msg = "Eae, doido! Como foi seu dia? Seu celular Oi está funcionando?" . "<br>" . "<br>";


echo "Total de caracteres: " . strlen($msg) . "<br>";
echo "Tem " . substr_count($msg, "Oi") . " 'Oi' na frase acima";
//esses casos tem distinção de lower/upper case
echo "<br>";
echo "Tem " . substr_count($msg, "oi") . " 'oi' na frase acima";

?>