<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timezone</title>
    <style>
    
    #myVideo {
        position:fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
    }
    .centro{
        border-radius: 31px;
        border-radius: 31px;
        border-radius: 31px;
background: #685a81;
box-shadow:  13px 13px 26px #625579, 
             -13px -13px 26px #6e5f89;
        width: 450px;
        /* height: 350px; */
        margin: auto;
        margin-top: 10%;
        padding: 29px;
        text-align: center;
    }
    .grupo{
        text-align: left;
    }
    </style>

<!-- <script type="text/javascript">    
    Redirect();
    function Redirect()
    {
        setTimeout("location.reload(true);",1000);   
    }
</script> -->
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="galaxy.mp4" type="video/mp4">
    </video>
    <div class="centro">
    <H1>Time zone</H1>
    <form action="030.php" method="post">
    <div class="grupo">
    <input id="japan" type="radio" name="fuso" value="japan">
    <label for="japan">Japão</label>
    <br>
    
    <input id="sp" type="radio" name="fuso" value="sp">
    <label for="sp">São Paulo</label>
    <br>
    
    <input id="madrid" type="radio" name="fuso" value="madrid">
    <label for="madrid">Madrid</label>
    </div>
    <br><br>
    <input type="submit" value="Confirmar">
    <br><br>
    </form>

    <?php
$escolha = "";

if(isset($_POST['fuso'])){
    $escolha = $_POST['fuso'];

}
if(isset($escolha)){
    if($escolha == "japan"){
        date_default_timezone_set('Asia/Tokyo');
        echo date('H: i');
        echo "<br><br>";
        echo "Tokyo! ";
    }
    else if($escolha == "sp"){
        date_default_timezone_set('America/Sao_Paulo');
        echo date('H : i');
        echo "<br><br>";
        echo "São Paulo! ";
    }
    else if ($escolha == "madrid"){
        date_default_timezone_set('Europe/Madrid');
        echo date('H : i');
        echo "<br><br>";
        echo "Madrid! ";
    }
    else{echo "";} 
    if(date('H') >= 6 && date('H') < 12){
        echo "bom dia";
    }
    else if (date('H') <= 18 && date('H') >= 13){
        echo "boa tarde";
    }
    else if (date('H') >= 18 && date('H') <= 23){
        echo "boa noite";
    }
    else{
        echo "boa madrugada";
    }
}
else{
    echo "Escolha uma opção";
}
$escolha = "";
?>

    </div>


</body>
</html>
