<?php
$var= 0;
foreach($_POST as $k => $values){
    $var++;
}
echo "Nombre d'argument:  $var";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="name">Votre nom</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="prenom">Votre prénom</label>
    <input type="text" name="prenom" id="prenom" required>
    <br>
    <label for="mail">Votre Email:</label>
    <input type="email" name="mail" id="mail" >
    <br>
    <button type="submit">Entrez</button>



    </form>
    
</body>
</html>