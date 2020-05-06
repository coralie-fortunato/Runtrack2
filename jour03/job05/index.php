<?php
$str = "“On n est pas le meilleur quand
on le croit mais quand on le sait.";
$str = strtolower($str);
$length = strlen($str);

$dic =  array(
        "voyelles" => ["a", "e","i", "o", "u","y"],
        "consonnes" =>  ["b", "c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"]
);

$i=0;
$voyelle = 0;
$consonne = 0;

while ($i < $length)
{
	$num_voy = count($dic["voyelles"]);
	$num_cons = count ($dic ["consonnes"]);
	$v = 0;
	$c = 0;
	 while ($v < $num_voy)
	 {
		 if($str[$i] == $dic["voyelles"][$v])
			 
		 {
			 $voyelle++;
			 break;
		
		 }

		$v++;
	 }
	  while ($c < $num_cons)
	   {
		 if($str[$i] == $dic["consonnes"][$c])
		 {
			 $consonne++;
			 break;
		
		 }

		$c++;
	   }
	  $i++;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<table>
<thead>
    <tr>
        <th>Voyelles</th>
		<th>Consonnes</th>

    </tr>
</thead>
<tbody>
    <tr>
        <td><?php echo $voyelle ?></td>
        <td><?php echo $consonne ?></td>


    </tr>
</tbody>



</table>
        
</body>
</html>