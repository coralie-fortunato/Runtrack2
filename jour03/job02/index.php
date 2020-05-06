<?php
$str = "Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie.";
$array = str_split($str);


foreach($array as $k => $caractere){
    
    if($k = ($k%2 == 0)){
	echo $caractere ;}
}
 
 

?>