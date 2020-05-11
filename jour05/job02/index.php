<?php
function bonjour(bool $jour){
    
    if($jour == true){
        echo "Bonjour" . "<br />" ;
    }
    elseif($jour == false){
        echo "Bonsoir " . "<br />" ;
    }
}
bonjour(true);
bonjour(false);



?>