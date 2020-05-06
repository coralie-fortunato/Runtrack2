<?php
    $str ="Dans l'espace, personne ne vous entend crier.";
     echo strlen($str);

     $array = str_split($str);
     $caractere=0;
     
    while (isset($array[$caractere])!= false)
    {
        $caractere++;
    }

    echo $caractere;
         
     
