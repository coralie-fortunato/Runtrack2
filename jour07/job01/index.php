<?php
session_start();

if(!empty($_POST['reset']))
{
  session_destroy();
  echo "0";
}
else 
{
  if (!isset($_SESSION['nbvisites']))
{

$_SESSION['nbvisites']=1;
}

else
{
$_SESSION['nbvisites']++;
}

echo $_SESSION['nbvisites'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur</title>
</head>
<body>
  <form action="index.php" method="POST" >
  <input type='submit' name= 'reset' value ='reset'/>
  </form>
  
</body>
</html>
