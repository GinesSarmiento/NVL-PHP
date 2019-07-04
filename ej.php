<?php
//Declaramos el array que contiene las palabras
$palabras = ["lunes", "mariposa", "sol", "acelerador", "aceituna", "palo"];
//Declaramos la variable que almacenar‡ las palabras de longitud mayor de 5
$palabras_mayores="";
//Declaramos un contandor
$contador = 0;

//Recorremos el array
foreach ($palabras as $p) {
	//Comprobamos si la longitud de la palabra es mayor que 5
	if (strlen($p)>5){
		//En caso afirmativo, aumentamos el contandor en uno
		$contador++;
		//y almacenamos la palabra en la variable
		$palabras_mayores .= $p . " ";
	}
}

//Por œltimo mostramos el resultado
echo "$palabras_mayores\n\nEl nœmero total de palabras de longitud mayor de 5 es: $contador";
?>


<?php
//Declaramos las variables
$numero = 5;
$semanas=0;
$posNeg = "despuŽs";

//Mostramos el texto inicial
echo "El d’a de la semana nœmero $numero es: ";

//Ejecutamos la funci—n que devolver‡ el d’a de la semana
diaSemana($numero);

//En caso de introducir un nœmero mayor que 7, muestra las semanas que han transcurrido hasta llegar al d’a de la semana
if ($semanas!= 0){
	echo " $semanas semanas $posNeg";
}

//Creamos la funci—n que calcular‡ el d’a de la semana
function diaSemana($num){

	//Hacemos referencia a las variables globales
	global $semanas, $posNeg;
	//Comprobamos que el nœmero introducido es positivo
	if ($num <0){
		//Lo convertimos en positivo
		$num = -$num;
		//Indicamos en la salida que se muestra un d’a previo
		$posNeg = "antes";
	}

	//Con el selector switch clasificamos los d’as de la semana
	switch ($num) {
		case '1':
			echo "Lunes";
			break;
		case '2':
			echo "Martes";
			break;
		case '3':
			echo "MiŽrcoles";
			break;
		case '4':
			echo "Jueves";
			break;
		case '5':
			echo "Viernes";
			break;
		case '6':
			echo "S‡bado";
			break;
		case '7':
			echo "Domingo";
			break;
		//En caso de que el nœmero introducido sea mayor que 7
		default:

			//Incrementamos su valor en uno
			$semanas++;
			//Ejecutamos la funci—n otra vez restando los d’as que tiene una semana
			//Esto se repetir‡ hasta que se obtenga un valor entre 1 y 7.
			diaSemana($num-7);
	}
}




