<?php 
//es un tipo de dato que puede almacenar n datos pero en vez de guardar en un indice, se le proporciona una llave o nombre a dicho dato

	$arregloColores=array(
		"coche"=> "verde",
		"moto"=> "roja" ,
		"avion"=> "gris"
	);

	//var_dump($arregloColores);
	//se realiza para poder mandar datos, asociativos, y en cada arreglo podemos llamar por el indice.
	echo $arregloColores['coche'];
 ?>