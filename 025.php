<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Seu nome épico (ao contrário)</h3>
    <form action="025.php" method="post">
    <label for="nome">Seu Nome:</label>
    <input type="text" name="nome" id="nome" required>
    <button type="submit">Confirmar</button>
    </form>
</body>
</html>

<?php

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $nome = tirarAcentos($nome);

    echo "seu nome épico: " . strtoupper(strrev($nome));
}

?>