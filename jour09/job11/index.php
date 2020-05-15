<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT AVG(capacite) as capacite_moyenne FROM salle ";
$query= mysqli_query($db,$requete);
$capacite = mysqli_fetch_all($query, MYSQLI_ASSOC);
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <?php
                foreach($capacite[0] as $capacite_moy=>$value){
                    echo  "<th>". $capacite_moy ."</th>";
                }
               
            ?>

        </thead>
        <tbody>
        <?php
                foreach($capacite[0] as $capacite_moy=>$value){
                    echo "<tr>";
                    echo  "<td>". $value."</td>";
                    echo "</tr>";
                }
               
            ?>
        </tbody>
    </table>
    
</body>
</html>