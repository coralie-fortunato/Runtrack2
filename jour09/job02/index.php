
<?php
$db= mysqli_connect("localhost","root","","jour08");
$requete = "SELECT `nom`, `capacite` FROM `salle`";
$requete2 = "SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME='salle'";
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
            <th><?php echo $column_name[1][0]?></th>
            <th><?php echo $column_name[3][0]?></th>
            

        </thead>
        <tbody>
          
           
            <tr>
                <td><?php echo $room[0][0] ?></td>
                <td><?php echo $room[0][1] ?></td>
            </tr>
            <tr>
                <td><?php echo $room[1][0] ?></td>
                <td><?php echo $room[1][1] ?></td>
            </tr>
            <tr>
                <td><?php echo $room[2][0] ?></td>
                <td><?php echo $room[2][1] ?></td>
            </tr>
            <tr>
                <td><?php echo $room[3][0] ?></td>
                <td><?php echo $room[3][1] ?></td>
            </tr>
            <tr>
                <td><?php echo $room[4][0] ?></td>
                <td><?php echo $room[4][1] ?></td>
            </tr>
            <tr>
                <td><?php echo $room[5][0] ?></td>
                <td><?php echo $room[5][1] ?></td>
            </tr>
        </tbody>

    </table>  
</body>
</html>
