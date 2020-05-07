<?php
$var = 0;
foreach($_GET as $k => $values){
    echo "<table>
        <tr>
            <td>Argument</td>
            <td>Valeurs</td>
        </tr>
      </table>";
	  break;

    $var++;
            

}
foreach($_GET as $k => $values){
    echo " <table>
           
            <tr>
                <td>$k</td>
                <td>$values</td>
            </tr>
            </table>";

    $var++;
            

}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>

    <form action="index.php" method="get">
    <label for="name">Votre nom</label>
    <input type="text" name="Nom" id="name" required>
    <br>

    <label for="prenom">Votre prénom</label>
    <input type="text" name="prenom" id="Prenom" required>
    <br>
    <label for="mail">Votre Email:</label>
    <input type="email" name="Mail" id="mail" required>
    <br>
    <textarea id="presentation" name="Texte">

    </textarea>
    <br>
    <button type="submit">Entrez</button>



    </form>
    
</body>
</html>