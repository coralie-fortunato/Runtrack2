
<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT `nom`, `capacite` FROM `salle`";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='salle'
            AND column_name='nom'
            OR column_name= 'capacite'";
$query= mysqli_query($db,$requete);
$query2= mysqli_query($db,$requete2);
$room = mysqli_fetch_all($query);
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
            for($i=0; $i < count($column_name); $i++){
                for($j=0; $j < count($column_name[$i]); $j++){
                    echo "<th>". $column_name[$i][$j]. "</th>";
                }
            }
        ?>
        </thead>
        <tbody>
        <?php
            for($i=0; $i < count($room); $i++){
                echo "<tr>";
                    for($j=0; $j < count($room[$i]); $j++){
                        echo "<td>". $room[$i][$j]. "</td>";
                    }
                 echo "</tr>";
            }
       ?>
       
        </tbody>

    </table>  
</body>
</html>
