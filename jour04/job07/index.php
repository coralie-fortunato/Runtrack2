<?php
$hauteur =$_GET["hauteur"];
$largeur =$_GET["largeur"];
$espace = "&nbsp";

for($l=0; $l< $largeur; $l++){
               
    echo  str_repeat($espace,  $largeur - $l) . "/". str_repeat("_", $l) . "\\" . "<br />";
                    
    }

for($i =0; $i <$hauteur - 1; $i++){

    echo "|" . str_repeat($espace, $largeur*2 ) . "|". "<br />";
}

echo  "|". str_repeat("_",$largeur) . "|". "<br />";
    






?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 07</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="largeur">Largeur</label>
        <input type="text" name= "largeur" id="largeur">
        <br>
        <label for="hauteur">Hauteur</label>
        <input type="text" name= "hauteur" id="hauteur">
        <br>
        <button type="submit" name ="valider">Valider</button>
    </form>
</body>
</html>
<?php
$hauteur =$_GET["hauteur"];
$largeur =$_GET["largeur"];
$espace = "&nbsp";

for($i = 0; $i< $hauteur; $i++)
{
   
     echo  str_repeat($espace, ( $largeur - $hauteur)  ) . "/". str_repeat("_", $i*2 +1) . "\\" . "<br />";
            
        
       
}
    
      

   
for($l = 0; $l<($hauteur-1); $l++){
            echo "|". str_repeat($espace,(($largeur*2)+ 1)). "|". "<br />";
            

            
        }
        echo  "|". str_repeat("_",$largeur). " " . "|". "<br />";
 
   
    



?>