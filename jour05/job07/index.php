<?php
function gras($str){
    $length = strlen($str);
    for($i=0; $i < $length; $i++ ){
        if (ctype_upper($str[$i])){
            echo "<b>$str[$i]</b>";
        }
        else{
            echo $str[$i];
        }
    }
    
}
$decalage= 2;
function cesar ($str, $decalage){
    
    $lettres =["a", "b", "c", "d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $length = strlen($str);
    $tablen = count($lettres);
    for($i=0; $i <  $length; $i++ ){

        for($j=0; $j < $tablen ; $j++){
            
            if(strtolower($str[$i]) == $lettres[$j]){
                
            echo $lettres[$j + $decalage];
        
            }
            elseif(strtolower($str[$i]) == "z"){
                echo $lettres[0+($decalage-1)];
            break;
            }
           
            elseif(strtolower($str[$i]) == " "){
                echo " ";
            }
        
        }
       
        
       

        
    }
}
function plateforme($str){
    
    $str2= str_word_count($str, 1);
    
   foreach($str2 as $words => $word){
       if( substr($word, -2) == "me"){
           echo $word . "_" . " ";
       }
      
       else{
           echo $word . " ";
       }
   }
   
    
    

}






?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 07</title>
</head>
<body>
    <form action="index.php" method="POST">
    <input name="str" type ="text">
    <br />
    <select name="fonction">
        <option value="">Choisir fonction</option>
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    
    </select>
    <button type="submit" name= "valider">Valider</button>
</form>
    
</body>
</html>
<?php
  if(isset($_POST["valider"])){
      if($_POST["fonction"] == "gras"){
          $str = $_POST["str"];
          gras($str);
         
      }
      elseif($_POST["fonction"] == "cesar"){
          $str = $_POST["str"];
          cesar($str, $decalage);
          
      }
      elseif($_POST["fonction"] == "plateforme"){
          $str = $_POST["str"];
          plateforme($str);
          
      }
  }

?>