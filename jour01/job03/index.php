<?php 
    $thead =[ "Type", "Nom", "Valeur"];
    $table = [ 
        "Type" => ["Booleen", "Entier", "Chaine de caractère", "Nombre a virgule"],
        "Nom"   => ['$bool', '$integer', '$string', '$float'],
        
    ];
    $bool ="true/false";
    $integer = 3;
    $string = "ceci est une chaine de caractère";
    $float = 1.5;
    
?>     
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>

    <style>
    table{
        border: 1px solid black;
        text-align: center;
        border-collapse: collapse;
        margin: auto;
    }
    th, td{
        height: 1em;
        width: 100px;
        border: 1px solid black;
        padding: 3%
    }
    </style>
    <table>
        <thead>
            <th><?php echo $thead[0]; ?></th>
            <th><?php echo $thead[1]; ?></th>
            <th><?php echo $thead[2]; ?></th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $table[ "Type"][0]; ?></td>
                <td><?php echo $table["Nom"][0]; ?></td>
                <td><?php echo $bool; ?></td>
            </tr>
            <tr>
                <td><?php echo $table[ "Type"][1]; ?></td>
                <td><?php echo $table["Nom"][1]; ?></td>
                <td><?php echo $integer; ?></td>
            </tr>
            <tr>
                <td><?php echo $table[ "Type"][2]; ?></td>
                <td><?php echo $table["Nom"][2]; ?></td>
                <td><?php echo $string; ?></td>
            </tr>
            <tr>
                <td><?php echo $table[ "Type"][3]; ?></td>
                <td><?php echo $table["Nom"][3]; ?></td>
                <td><?php echo $float; ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html> 