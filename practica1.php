<?php 

// comentario de una sola linea

/*
 que esta escrito aqui esta comentado

*/


print('Hello ');

echo "World \n";


//VARIABLES

$boolean = true; // variable que recibe true or false
$boolean = false;

$int1 = 12;
$int2 = -12;
$int3 = 012; //Base Octal
$int4 = 0x0f; // Hexadecimal
// $int = 0b11111111111; //255

$float = 1.234;
$float = 1.2e3;
$float = 7e-10;

unset($init1); //elimininar la variable


var_dump($float);
var_dump($int4);

//ARITMETICA


$sum = 1+ 1; //suma
$res = 2 - 1.0; //resta
$mul = 4 * 3; //multiplicacion
$div = 2 / 4; //division


var_dump($res);
var_dump($div);


$num = 0;
$num +=1; // $num = 
echo $num++;
echo ++$num;
$num -=2;
$num /=$float;




//STRINGS

$num = 5;
$varString = '$num';
echo $varString;
$varString = "El valor de la variuable num $num";
echo $varString;
$otroString = "Otra forma de incluir variables {$num}";
echo $varString;
$otroString2 = "Otra 2 forma de incluir variables $${num}";
echo $otroString2;

//-.,{ñ´p´p'



$stringMult = <<<'END'
Multi line
string
END;

echo $stringMult;
echo 'Este es un '.'String'; 
echo 'multiples', 'parametros', 'en echo';



//CONSTANTES

define("FOO", "algo");
echo FOO;

echo "Este es el valor de la constante FOO = ".FOO;


define("_FOO", 56);






