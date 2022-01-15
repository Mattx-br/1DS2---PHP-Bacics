<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akatsuki</title>
    <link rel="stylesheet" href="037/037.css">

</head>
<body>
    
<div class="centro">
<h1>AKATSUKI</h1>
<fieldset>
<legend>Painel de ordenação</legend>
<table>
<tr>
<th>Personagem
<a href="037.php?tipo=nome&ordem=asc">▲</a>
<a href="037.php?tipo=nome&ordem=desc">▼</a>
</th>
<th>Jutsu
<a href="037.php?tipo=jutsu&ordem=asc">▲</a>
<a href="037.php?tipo=jutsu&ordem=desc">▼</a>  
</th>
</tr>
<?php
    $membro[0]["nome"] = "Itachi";
    $membro[0]["img"] = "<img src='037/itachi.jpg' alt='Itachi'>";
    $membro[0]["jutsu"] = "Tsukuyomi";

    $membro[1]["nome"] = "Kisame";
    $membro[1]["img"] = "<img src='037/kisame.jpg' alt='Kisame'>";
    $membro[1]["jutsu"] = "Estilo àgua:<br> Jutsu dragão de àgua";
    
    $membro[2]["nome"] = "Konan";
    $membro[2]["img"] = "<img src='037/konan.jpg' alt='Konan'>";
    $membro[2]["jutsu"] = "Tsuru laminado";
    
    $membro[3]["nome"] = "Obito";
    $membro[3]["img"] = "<img src='037/obito.jpg' alt='Obito'>";
    $membro[3]["jutsu"] = "Kamui";
    
    $membro[4]["nome"] = "Pain";
    $membro[4]["img"] = "<img src='037/pain.png' alt='Pain'>";
    $membro[4]["jutsu"] = "Shinra Tensei";


    // para ordenar em ordem alfabética
    if(isset($_GET["ordem"]) && $_GET['ordem'] == "desc"){
        $ordem = SORT_DESC;
    }
    else{
        $ordem = SORT_ASC;
    }

    $tipo = "nome";
    if(isset($_GET['tipo'])){
        $tipo = $_GET["tipo"];
    }
    foreach($membro as $n =>$i){
        $ordenar[$n]=$i[$tipo];
        echo "n é: ". $n . ", ";
        echo "i é: ". $i[$tipo] . "<br>";
    }

    array_multisort($ordenar, $ordem, $membro);

    foreach($membro as $c){
        echo "<tr><td>" . $c['nome'] . "<br> Jutsu: " . $c["jutsu"] . "</td>";
        echo "<td>" . $c["img"] . "</td></tr>";
    }
    ?>
</table>
</fieldset>
</div>
    
</body>
</html>

<!-- array_multisort() -->
<!-- parametros:
1º
2º 
3º array que será usado

 -->