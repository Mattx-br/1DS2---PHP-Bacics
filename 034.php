<?php

use function PHPSTORM_META\type;

$pessoa["nome"] = "Maria";
$pessoa['idade'] = "18";
$pessoa['amigo'][] = "andré";
$pessoa['amigo'][] = "Patrícia";

foreach($pessoa as $dado){
    echo $dado. "<br>";
    // if(type($dado) == array()){
    //     str($dado);
    // }
}

foreach($pessoa['amigo'] as $dado){
    echo $dado . "<br>";
}

?>