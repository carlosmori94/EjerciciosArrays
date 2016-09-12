<?php
$miArray = array(5);
$suma=0;
for ($i=0; $i < 5; $i++) { 
	$miArray[$i] =rand(0,2);
	$suma+=$miArray[$i];
}
for ($i=0; $i < 5; $i++) { 
	# code...
	echo "Casillero[".$i."] contiene el valor ".$miArray[$i]."<br/>";
}
echo count($miArray).$suma;
if(($suma/count($miArray)>6)
	echo ("Los numeros promediados dan >6");
else if(($suma/count($miArray)==6)
 	echo ("Los numeros promediados dan 6");
}else
 	echo("Los numeros promediados dan < a 6");
?>