<?php 
	#es una estructura de control iterativa
	#que usa llaves o asociaciones de datos como indice
	$arregloColores=array(
		"coche"=> "verde",
		"moto"=> "roja" ,
		"avion"=> "gris"
	);

	$array=array(1,2,3,4,5);

	//pide un objeto valido, que son una coleccion de elementos
	foreach ($array as $key)
	{
		echo $key;
		echo "<br>";
	}
 ?>