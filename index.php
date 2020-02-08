<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">

</head>
<body>
 
 <h3>Multiples of 3 and 5</h3>
 <hr>

<fieldset> 
 <legend>
 	Si desplegamos todos los números naturales menores a 10 que son múltiplos de 3 o 5, obtenemos 3, 5, 6 y 9.
La suma de estos múltiplos es 23. <b>Encontrar la suma de todos los múltiplos de 3 y 5 menores a 1000.</b>
 </legend>
 	<?php

$total=0;
for ($i=1; $i < 1000; $i++) {

	if ($i%3 || $i%5){
		$total+= $i;
	}
}

echo "El resultado es = ".$total;

?>

</fieldset>
 
</body>
</html>