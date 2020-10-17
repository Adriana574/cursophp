<?php 
	//un arreglo es un tipo de dato que contener n datos a partir de un almacenamiento por indice
	$arreglo = array();
	$arreglo[0]="juan";
	$arreglo [1]=10;
	$arreglo [2]= 'Facultad :)';
	$arreglo[3]='autodidacta';


	$arreglo2=array('Jose', 5,6,7,8,9,10);
	//var_dump($arreglo); //permite visualizar lo que contiene el arreglo

	//echo $arreglo[1] +5;

	//echo count($arreglo);

	//declaramos un for, count cuenta todos los datos que contiene el arreglo
	for ($i=0; $i < count($arreglo2); $i++) 
	{ 
		echo $arreglo2[$i];
		echo "<br>";

		if ($arreglo2[$i]=='autodidacta') 
		{
			echo "Felicidades encontraste el dato"; //realiza una busqueda en nuestro arreglo
			echo "<br>";
		}
	}

 ?>