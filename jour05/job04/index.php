<?php

function calcule( $a, $operation, $b){
    if( $operation == "+" ){
        $result = $a + $b;
    }
    elseif( $operation == "-" ){
        $result = $a - $b;
    }
    elseif( $operation == "/" ){
        $result = $a / $b;
    }
    elseif( $operation == "%" ){
        $result = $a + $b;
    }
    elseif( $operation == "*" ){
        $result = $a * $b  ;
    }

   return $result ;

}

echo calcule(5, "+" , 9)."<br />";
$num = 30;
$op= "/";
$num2= 2;
echo calcule($num, $op, $num2) ."<br />";
?>