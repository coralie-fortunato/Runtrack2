<?php
function bubblesort ($tab, bool $croissant){
    if($croissant == true ){
      sort($tab);
      foreach($tab as $key=> $val)
      echo $val . " ";

      
    }
    else{
        rsort($tab);
        foreach($tab as $key=> $val)
        echo $val . " ";

    }
    return ;
}
$tab= ["abc", "ghi", "def"];

bubblesort($tab, true);
echo "<br />";
bubblesort($tab, false);


 


?>