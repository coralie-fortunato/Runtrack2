<?php
if(isset($_POST["valider"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(($username == "John" ) && ($password == "Rambo")){
        echo "C'est pas ma guerre !";
    }
    else{
        echo "Votre pire cauchemar ! ";
    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 05</title>
</head>
<body>
    <form action ="index.php" method="POST">
        <label for="username">Username</label>
        <input  type="text" name="username" id="username" required>
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="valider">Valider</button>
    </form>
</body>
</html>