<?php
    
    $str="I'm sorry Dave I'm afraid I can't
    do that.";
	$str = strtolower($str);

    $array = str_split($str);
	$voyelles =['a', 'e', 'i', 'o' ,'u', 'y', 'I'];
		

    foreach($array as $caractere){
		
		if($caractere == $voyelles[0]){
		echo $voyelles[0];}
		
		
		elseif($caractere == $voyelles[1]){
		echo $voyelles[1];}
		elseif($caractere == $voyelles[2]){
		echo $voyelles[2];}
		elseif($caractere == $voyelles[3]){
		echo $voyelles[3];}
		elseif($caractere == $voyelles[4]){
		echo $voyelles[4];}
		elseif($caractere == $voyelles[5]){
		echo $voyelles[5];}
		
    }
?>
   