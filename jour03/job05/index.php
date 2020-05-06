<?php
$str = "“On n est pas le meilleur quand
on le croit mais quand on le sait.";
$str = strtolower($str);
$array = str_split($str);
$length = strlen($str);

$dic =  [
        "Voyelles" => ['a', 'e','i', 'o', 'u','y'],
        "Consonnes"=>  ['b', 'c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z']
];

$consonne =0;
$voyelle = 0;
$i=0;
$num_voy = count($dic["Voyelles"]);
$num_cons = count($dic["Consonnes"]);

while ($i <= $length){
        while( ($v = 0) <= $num_voy )
		{
                if($str[$i] == $dic["Voyelles"][$v]){
                        $voyelle++;
                        break;

                }
                $v++;

        }
        while( ($c = 0) <= $num_cons ){
                if($str[$i]== $dic["Consonnes"][$c]){
                        $consonne++;
                        break;

                }
                $c++;

        }

        $i++;

}
echo $voyelle . $consonne;

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        
</body>
</html>