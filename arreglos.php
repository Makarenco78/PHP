ARRAY
<?php

"FUNCIONES ARRAY"
$arreglo = array('H','O','L','A')
$arreglo = [H,O,L,A]
$arreglo=array_push($arreglo,'!','!')			/*agrega los elementos al final*/
$arreglo=array_pop($arreglo)				/*quita el ultimo elemento del arreglo*/

$array_shift($arreglo)					/*quita un elemento al comienzo*/
$array_unshift($arreglo, $elm1, $elm2, ...)		/*agrega los elementos al comienzo*/

$arreglo=array_merge($arreglo1, $arreglo2)		/*combina arreglos*/
$arreglo=array_reverse()
$arreglo=array_map()					//-->averiguar que hace
$sub_arreglo=array_chunk($arreglo, 10)			/*divide un arreglo en n elementos*/
$nombre=array_column($arreglo, $columna)
$total=array_sum($arreglo)

empty()         //funcion para evaluar si una cadena está vacía


"OPERADOR TERNARIO"
$bool=$array ? array_sum($array) : 0			/*Si el array tiene elementos revuelve la suma*/
$bool=$array ? array_product($array) : 0		/*Si el array tiene elementos revuelve la multiplicacion*/

$arreglo=explode($delimitador, $string, $cantidad)	/*divide un string segun un caracter delimitador*/
$string=implode(" ", $arreglo) 				/*une o concatena strings*/
$string=join(' ', $arreglo)				/*similar a implode*/

in_array(,)						//-->averiguar que hace esto


FUNCIONES GENERICAS
function saludar($saludo="Hola"):string{
  return $saludo;
}

BUCLES
foreach($palabra as $letra){
  echo $letra;
}

?>
