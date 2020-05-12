<?php
$style=null;
if(isset($_POST["valider"])){
    if($_POST["style"] == "style1"){
        $style= "style1.css";

    }
    elseif($_POST["style"] == "style2"){
        $style= "style2.css";

    }
    elseif($_POST["style"] == "style3"){
        $style= "style3.css";

    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="<?php echo $style ?>">
    <title>Job06</title>
</head>
<body>
<h1>Mon formulaire</h1>

<form action= "index.php" method="POST">
<select name="style">
<option value="">Choisir</option>
<option value="style1">style1</option>
<option value="style2">style2</option>
<option value="style3">style3</option>



</select>
<button type="submit" name="valider">Valider</button>


</form>
    
    
</body>
</html>