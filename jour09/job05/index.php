<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT * FROM etudiants
            WHERE YEAR(CURRENT_DATE) - YEAR(naissance) < 18";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='etudiants'";
$query= mysqli_query($db,$requete);
$query2= mysqli_query($db,$requete2);
$minor_students = mysqli_fetch_all($query);
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
            for($j=0; $j < count($minor_students); $j++){
                echo "<tr>";
                for($k=0; $k< count($minor_students[$j]); $k++){
                    echo "<td>" . $minor_students[$j][$k] . "</td>";
                }
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>