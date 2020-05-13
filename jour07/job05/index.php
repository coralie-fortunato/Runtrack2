<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table{
            margin: auto;

        }
        button{
            width:50px;
            height: 50px;
        }
    </style>
<form method="POST">
    <table>
        <tr>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
        </tr>
        <tr>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
        </tr>
        <tr>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
            <td><button type="submit" name="case" value="-"></button></td>
        </tr>
    </table>
</form>    
</body>
</html>