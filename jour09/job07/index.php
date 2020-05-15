<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT SUM(superficie) as superficie_totale FROM etage";
$query= mysqli_query($db,$requete);
$superficie = mysqli_fetch_all($query, MYSQLI_ASSOC);
var_dump($superficie);



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <?php
                foreach($superficie[0] as $superficie_totale=>$value){
                    echo  "<th>". $superficie_totale ."</th>";
                }
               
            ?>
            
         
        </thead>
        <tbody>
            <?php
                foreach($superficie as $key){
                    foreach($key as $result){
                        echo "<tr>";
                        echo "<td>". $result . "</td>";
                        echo "</tr>";
                    }
            
                }
            ?>
            
        </tbody>
    </table>
    
</body>
</html>