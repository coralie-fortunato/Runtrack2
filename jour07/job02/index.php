<?php
if(isset($_POST["reset"])){
  $value=0;
  setcookie("nbvisites", $value);
  echo $_COOKIE["nbvisites"];

}

else{
  if (!isset($_COOKIE["nbvisites"])) 
  {
    $value = 1;
  }
  else 
  {
    $value = ++$_COOKIE["nbvisites"];
  }

setcookie("nbvisites", $value);

echo $_COOKIE["nbvisites"];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur</title>
</head>
<body>
<form action="index.php" method="POST" >
  <button type='submit' name="reset" >Reset</button>
  </form>
  
</body>
</html>

