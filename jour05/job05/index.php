<?php

function occurrences($str, $char){
    $i=0;
    $strtab = str_split($str);
    foreach($strtab as $s){
     
        if ($char == $s)
        {
         $i++;
        }
    }
  
    return $i;
}

$str="Bonjour La Plateforme !";
$char="a";
echo occurrences($str, "$char") . "<br />";
echo occurrences($str, "o");


?>