<?php 
	$var="pedro jimenez lopez";
	$fecha="01-05-2017";

	#explode es una funcion que convierte un string a un arreglo, dependiendo de la construccion pedida.

//le decimos que a partir de la separacion nos construya un arreglo
	$datos=explode(" ", $var);

	//aqui le decimos que queremos que nos muestre el apellido paterno

	$paterno=$datos[1];

	/*echo "<pre>";
	print_r($datos);
	echo "</pre>";*/
	
	#otra manera de separar es
	$f=explode("-", $fecha);

	echo "El año de la fecha es: ".$f[2];
 ?>