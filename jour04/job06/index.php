<?php

if(isset($_GET["valider"])){
    $value =$_GET["nombre"];
    if( $value%2 == 0){
        echo "Nombre Pair";
    }
    elseif($value%2 == 1){
        echo "Nombre Impair"
    }
}





?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="number">Entrez votre nombre</label>
        <br>
        <input type="number" id ="number" name="nombre">
        <br>
        <button type="submit" name="valider">Valider</button>
    </form>
</body>
</html>