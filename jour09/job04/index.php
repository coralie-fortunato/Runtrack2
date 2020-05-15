<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT * FROM `etudiants` WHERE prenom LIKE 'T%'";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='etudiants'
            AND  column_name='prenom'";
$query= mysqli_query($db,$requete);
$query2= mysqli_query($db,$requete2);
$prenom_t = mysqli_fetch_all($query);
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
               echo "<th>" . $column_name[$i][0] . "</th>";
           }
           ?>

        </thead>
        <tbody>
        <?php
            for($j=0; $j < count($prenom_t); $j++){
                echo "<tr>";
                echo "<td>" . $prenom_t[$j][1] . "</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>
