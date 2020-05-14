<?php
session_start();
if (isset($_POST['envoi']))
        {
            if(!empty($_POST["prenom"]) )
            {
                $_SESSION["prenoms"][] = $_POST["prenom"];
            }
        }
        elseif (isset($_POST['reset']))
        {
            $_SESSION['prenoms'] = [];
            session_destroy();
        }

        if(!empty($_SESSION["prenoms"]))
        {
            foreach ($_SESSION["prenoms"] as $valeur)
            {
                echo $valeur ."<br />";
            } 
        }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="prenom">Votre prénom</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit" name="envoi">Envoi</button>
        

    </form>
    <form action="index.php" method="POST">
    <button type="submit" name="reset">Reset</button>
    
    </form>
    
</body>
</html>