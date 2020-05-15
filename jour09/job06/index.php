<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT COUNT(*) AS nb_etudiants FROM etudiants;";
$query= mysqli_query($db,$requete);
$number_students = mysqli_fetch_all($query, MYSQLI_ASSOC);
var_dump($number_students);




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
                foreach($number_students[0] as $number=>$value){
                    echo  "<th>". $number ."</th>";
                }
               
        ?>
            
         
        </thead>
        <tbody>
            <?php
                foreach($number_students as $number=>$value){
                    echo "<tr>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>