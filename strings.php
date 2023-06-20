<?php

"OPERADOR TERNARIO"
$suma$array ? array_sum($array) : 0			/*Si el array tiene elementos revuelve la suma*/
$suma=$array ? array_product($array) : 0		/*Si el array tiene elementos revuelve la multiplicacion*/


"FUNCIONES STR"
trim($string, " ")
rtrim($string, " ")
ltrim($string, " ")

rand(0,1)
random_int(0,10)
strrev()
strlen()
strtoupper()
strtolower
shuffle()
substr($texto, 0 , 10);
range('a','z')
	
$arreglo=explode($delimitador, $string, $cantidad)	/*divide un string segun un caracter delimitador*/
$string=implode(" ", $arreglo) 				/*une o concatena strings*/
$string=join(' ', $arreglo)				/*similar a implode*/


FUNCIONES GENERICAS
function saludar($saludo="Hola"):string{
  return $saludo;
}

BUCLES
foreach($palabra as $letra){
  echo $letra;
}

?>
