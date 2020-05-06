<?php
    $array = [200, 204, 173, 98, 171, 404, 459];

    foreach( $array as $numbers){
        if($numbers%2 == 0){
            echo "$numbers est pair <br /> ";
        }
        elseif($numbers%2 == 1){
            echo "$numbers est impair <br />";
        }


    }
?>