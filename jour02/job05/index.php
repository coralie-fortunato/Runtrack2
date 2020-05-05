<?php
   $count = 0;
   
   for ($i=2; $i<=1000; $i++){
	   $flag=false;
	   for ($j= 2; $j <$i;$j++)
	   {
		   $rem= $i%$j;
		   if ($rem==0) $flag++;
	   }
	   if($flag==0){
		   echo $i . "<br/>";
			$count++;}
   }
         
    




?>