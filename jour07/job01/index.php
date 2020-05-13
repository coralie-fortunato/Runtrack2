<?php
session_start();
$nbvisites = 1 ;
function compteur(){
    if(file_exists('page-test.php')){
        $nbvisites = (int)file_get_contents('page-test.php');
        $nbvisites++;
       
    }
    file_put_contents('page-test.php', $nbvisites);
}

function nombre_vues(){
 if(file_exists("page-test.php")){

 }

  
  return file_get_contents('page-test.php');
}
compteur();
echo "La page a été vu " . nombre_vues() ." fois" . "<br />";
echo

?>
