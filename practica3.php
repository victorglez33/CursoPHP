<?php
// POO Programacion Orientado a Objetos
// Metodo de programar

/**
* 
*/
class MyClass 
{
	
	const MY_CONST = 'value'; //esta es una constante
	static $staticVar = 'static'; 

	public static $publicStaticVar = 'publicStatic'; // se pueden ver donde sea

	private static $privateStaticVar = 'privateStaticVar'; // solo se pueden ver en la clase

	protected static $protectedStaticVar = 'protectedStaticVar'; // solo se pueden ver en la clase y derivadas

	public $property = 'public';
	public $instanceProp;
	protected $prot = 'protected';
	private $priv = 'private';


  //METODOS

	public function __construct($instanceProp){
		$this->instanceProp = $instanceProp;
	}

	public function myMethod(){
		print 'MyClass';

	}

	final function youCannnotOverridedMe(){

	}


	public static function myStaticMethod(){
		print 'I am static';
	}

}

//Acceder a variable y metodos
echo MyClass::MY_CONST; //imprime value
echo "\n";
echo MyClass::$staticVar; // Static
echo "\n";
MyClass::myStaticMethod(); // imprime I am static
echo "\n";


//Instanciarlo para acceder a los demas metodos

$my_class = new MyClass('esta es una instancia');
echo $my_class->property;
echo "\n";
echo $my_class->instanceProp;
echo "\n";
$my_class->myMethod();
echo "\n";
//$my_class->privateStaticVar; // no se puede accesar por ser privada

class MyOtherClass extends MyClass
{
	function prinProtectedProperty(){
		echo $this->prot;
	}
    //Sobre escribir metodos
	function myMethod(){
		parent::myMethod();
		print '> MyOtherClass';
		echo "\n";
	}
}

$otherClass = new MyOtherClass("Test");
$otherClass->myMethod();


class MyMapClass
{
	private $property;

	public function __get($key)
	{
		return $this->$key;
	}
	public function __set($key, $value)
	{
		$this->$key = $value;
	}
}


$x = new MyMapClass();
$x->__set('property',5);
echo $x->__get('property');
echo "\n";


//Interfaces se escriben los metodos sin contenido, sirven para hacer contratos: todas las propiedaddes ya no se pueden cambiar los 

interface InterfaceOne{
	public function doSomething();
}

interface InterfaceTwo{
	public function doSomethingElse();
}

interface interfaceThree extends InterfaceTwo{
	public function doAnotherContract();
}

class SomeOtherClass implements InterfaceOne, InterfaceTwo
{
	public function doSomething(){
		echo 'doSomenthing';
		echo "\n";
	}

	public function doSomethingElse(){
		echo 'doSomethingElse';
		echo "\n";
	}

}

$y = new SomeOtherClass();
$y-> doSomething();
$y-> doSomethingElse();

