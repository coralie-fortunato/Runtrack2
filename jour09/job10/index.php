<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT * FROM `salle` ORDER BY `salle`.`capacite` ASC ";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='salle'";
$query= mysqli_query($db,$requete);
$query2= mysqli_query($db,$requete2);
$capacite_asc = mysqli_fetch_all($query);
$column_name = mysqli_fetch_all($query2); 


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
           for($i=0; $i< count($column_name); $i++ ){
               for($j=0; $j< count($column_name[$i]); $j++){
                echo "<th>" . $column_name[$i][$j] . "</th>";
               }
           }
           ?>
        </thead>
        <tbody>
            <?php
            for($k=0; $k < count($capacite_asc); $k++){
                echo "<tr>";
                for($l=0; $l < count($capacite_asc[$k]); $l++){
                    
                    echo "<td>" . $capacite_asc[$k][$l]; "</td>";
                    
                }
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    
</body>
</html>