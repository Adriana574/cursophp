<?php 
	//es una estructura de control iterativa o repititiva que funciona siempre y cuando una condicion sea valida

	$condicion = 0;
	while ($condicion < 10) 
	{
		echo "Se cumple con la condicion";
		echo "<br>";//salto de linea

		//se agrega un acumulador
		echo $condicion++;
		echo "<br>";

		//quiere decir que esta guardando lo que tiene condicion en condicion + 1, y asi sucesivamente, hasta cumplir que no sea menor de 10
	}

	//un while infinito nunca tiene fin

 ?>