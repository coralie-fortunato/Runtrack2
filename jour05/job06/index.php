<?php
 
 function leetspeak(string $str){
     
     $length = (int)strlen($str);
     for($i=0; $i< $length; $i++){
         
         if($str[$i] == "a" || $str[$i] == "A"){
             echo "4";
         
         }
        elseif($str[$i] == "b" || $str[$i] == "B" ){
            echo "8";
         } 
        elseif($str[$i] == "c" || $str[$i] == "C" ){
            echo "(";
         } 
        elseif($str[$i] == "d" || $str[$i] == "D" ){
            echo "[)";
         } 
        elseif($str[$i] == "e" || $str[$i] == "E" ){
            echo "3";
         } 
        elseif($str[$i] == "f" || $str[$i] == "F" ){
            echo "|=";
         } 
        elseif($str[$i] == "g" || $str[$i] == "G" ){
            echo "6";
         } 
        elseif($str[$i] == "h" || $str[$i] == "H" ){
            echo "#";
         } 
        elseif($str[$i] == "i" || $str[$i] == "I" ){
            echo "!";
         } 
        elseif($str[$i] == "j" || $str[$i] == "J" ){
            echo "_|";
         } 
        elseif($str[$i] == "k" || $str[$i] == "K" ){
            echo "X";
         } 
        elseif($str[$i] == "l" || $str[$i] == "L" ){
            echo "1";
         } 
        elseif($str[$i] == "m" || $str[$i] == "M" ){
            echo "|v|";
         } 
        elseif($str[$i] == "n" || $str[$i] == "N" ){
            echo "^|";
         } 
        elseif($str[$i] == "o" || $str[$i] == "O" ){
            echo "0";
         } 
        elseif($str[$i] == "p" || $str[$i] == "P" ){
            echo "|*";
         } 
        elseif($str[$i] == "q" || $str[$i] == "Q" ){
            echo "(_,)";
         } 
        elseif($str[$i] == "r" || $str[$i] == "R" ){
            echo "2";
         } 
        elseif($str[$i] == "s" || $str[$i] == "S" ){
            echo "5";
         } 
        elseif($str[$i] == "t" || $str[$i] == "T" ){
            echo "7";
         } 
        elseif($str[$i] == "u" || $str[$i] == "U" ){
            echo "(_)";
         } 
        elseif($str[$i] == "w" || $str[$i] == "W" ){
            echo "\/\/";
         } 
        elseif($str[$i] == "y" || $str[$i] == "Y" ){
            echo "7";
         } 
        elseif($str[$i] == "z" || $str[$i] == "Z" ){
            echo "=/=";
         } 
         else{
             echo $str[$i];
         
         } 
      
     }
     
 }
 
 $str ="Bonjour la Plateforme . ";
 $result= leetspeak($str);
 
 echo $result;
 
 
 
 ?>