<?php 

	//Los operadores logicos sirven para validar expresiones, tal es el caso del operador "or" que sirve para validar una sentencia u otra, en el caso del operador "and" que sirve para validar ambas sentencias

	$resultado = 50;
	if ($resultado < 51 and $resultado > 49) 
	{
		//echo "Es un numero 50 valido";
	} 
	
	$edadvalida = 25;

	if ($edadvalida > 18 and $edadvalida <26) 
	{
		//echo "La edad es valida";
	}

	$sexo = "F";
	if ($sexo == 'M' or $sexo == 'F') 
	{
		echo "Sexo valido";
	}

 ?>