<?php
$str ="Les choses que l'on
possede finissent par nous posseder.";



$length = strlen($str);
$i = $length - 1;

while ($i >= 0){
    echo $str[$i];
    $i =$i-1;
}
?>