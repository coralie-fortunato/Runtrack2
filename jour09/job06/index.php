<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT COUNT(*) AS nb_etudiants FROM etudiants;";
$query= mysqli_query($db,$requete);
$number_students = mysqli_fetch_all($query);




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
            <th>Nb_etudiants</th>
         
        </thead>
        <tbody>
            <?php
                foreach($number_students as $number){
                    echo "<tr>";
                    echo "<td>" . $number[0] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>