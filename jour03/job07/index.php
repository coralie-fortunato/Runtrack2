<?php
$str = "Certaines choses changent, et d'autres
ne changeront jamais.";

$array = str_split($str);
$length = count($array);
$i=0;

while($i < $length){
    if($i == ($length-1)){
        echo $array[0];
    break;
    }
    else{
        echo $array[$i + 1];
    }
	$i++;
}
?>