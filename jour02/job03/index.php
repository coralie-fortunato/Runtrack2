<?php
$min = 0;
$max = 100;

for ($num = $min; $num <= $max; $num++){
    if($num >= $min && $num <= 20){
        echo "<i>$num<br/></i>";
    }
    elseif($num >= 25 && $num <= 50){
		if ($num >= 25 && $num<= 41) {
        echo "<u>$num<br/></u>";}
		elseif($num >= 43 && $num<= 50){
			echo "<u>$num<br/></u>";}
		else{
		echo "La Plateforme <br/>";}
		
    }
    else{
        echo "$num<br/>";
    }

}




?>