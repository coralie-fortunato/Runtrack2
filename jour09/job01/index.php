<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT * FROM `etudiants`";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='etudiants'";

$query= mysqli_query($db,$requete);
$query2= mysqli_query($db,$requete2);
$students = mysqli_fetch_all($query);
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
        <th><?php echo $column_name[0][0] ?></th>
        <th><?php echo $column_name[1][0] ?></th>
        <th><?php echo $column_name[2][0] ?></th>
        <th><?php echo $column_name[3][0] ?></th>
        <th><?php echo $column_name[4][0] ?></th>
        <th><?php echo $column_name[5][0] ?></th>
   
    <tbody>
       
        <tr>
            <td><?php echo $students[0][0] . " "?></td>
            <td><?php echo $students[0][1]. " "?></td>
            <td><?php echo $students[0][2]. " "?></td>
            <td><?php echo $students[0][3]. " "?></td>
            <td><?php echo $students[0][4]. " "?></td>
            <td><?php echo $students[0][5]. " "?></td>
            
        </tr>
        <tr>
            <td><?php echo $students[1][0] . " "?></td>
            <td><?php echo $students[1][1]. " "?></td>
            <td><?php echo $students[1][2]. " "?></td>
            <td><?php echo $students[1][3]. " "?></td>
            <td><?php echo $students[1][4]. " "?></td>
            <td><?php echo $students[1][5]. " "?></td>
            
        </tr>
        <tr>
            <td><?php echo $students[2][0] . " "?></td>
            <td><?php echo $students[2][1]. " "?></td>
            <td><?php echo $students[2][2]. " "?></td>
            <td><?php echo $students[2][3]. " "?></td>
            <td><?php echo $students[2][4]. " "?></td>
            <td><?php echo $students[2][5]. " "?></td>
            
        </tr>
        <tr>
            <td><?php echo $students[3][0] . " "?></td>
            <td><?php echo $students[3][1]. " "?></td>
            <td><?php echo $students[3][2]. " "?></td>
            <td><?php echo $students[3][3]. " "?></td>
            <td><?php echo $students[3][4]. " "?></td>
            <td><?php echo $students[3][5]. " "?></td>
            
        </tr>
        <tr>
            <td><?php echo $students[4][0] . " "?></td>
            <td><?php echo $students[4][1]. " "?></td>
            <td><?php echo $students[4][2]. " "?></td>
            <td><?php echo $students[4][3]. " "?></td>
            <td><?php echo $students[4][4]. " "?></td>
            <td><?php echo $students[4][5]. " "?></td>
            
        </tr>
        <tr>
            <td><?php echo $students[5][0] . " "?></td>
            <td><?php echo $students[5][1]. " "?></td>
            <td><?php echo $students[5][2]. " "?></td>
            <td><?php echo $students[5][3]. " "?></td>
            <td><?php echo $students[5][4]. " "?></td>
            <td><?php echo $students[5][5]. " "?></td>
            
        </tr>
    </tbody>

</table>
    
</body>
</html>