<?php
function bonjour(bool $jour){
    if($jour = true){
        echo "Bonjour" . "n/";
    }
    else{
        echo "Bonsoir" ."n/";
    }
}
bonjour(true);
bonjour(false);



?>