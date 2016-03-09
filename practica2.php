<?php
// https://github.com/miniguez/cursoPhp/blob/master/practica2.php
//Algunas Funciones de Strings

//explode
$str = "Hola Mundo, ya esta nevando"; 
var_dump($str);
print_r(explode(" ", $str));


//money_format
echo "$".money_format("%i", 1000);
echo "\n";


//Strings_replace
$vocales = array("a","e","i","o","u");
$soloConsonantes = str_replace($vocales, "", "Hola Mundos");
echo $soloConsonantes."\n";

$frase = "You should eat fruits, vegetables, and fiber every day";
$healthy = array("fruits", "vegetables", "fiber");
$yummy = array ("pizza", "beer", "ice cream");

$nuevafrase= str_replace($healthy, $yummy, $frase);
echo $nuevafrase;

echo "\n";

//hash cryt

$password = "admin123";
$hash = crypt($password, "djHIUYDa");
echo $password." = ".$hash;
echo "\n";


//md5

$str = 'apple';
if (md5($str) == '1f3870be274f6c49b3e31a0c6728957f') {
echo "Bien encriptado"."\n";
}

//TRIM

$str = "   prueba de String con espacios      ";
echo trim($str);
echo "\n";



$str = "Hello World";
$trimmed = trim($str, "HdWr");
echo $trimmed;
echo "\n";









