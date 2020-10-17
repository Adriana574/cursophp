<?php 

	$valorMaestro = 'A';

//se le dice a switch que va a tener el valor maestro, se le agregan casos y necesitan siempre el break
	switch ($valorMaestro)
	 {
		case 'A':
			echo "Este es el caso 1";
			break;
		case 2:
			echo "Este es el caso dos";
			break;
//es el caso que ya no existe, cuando no haya un caso valido
		default:
			echo "No existe ese caso";
			break;
	}

 ?>