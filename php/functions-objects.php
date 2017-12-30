<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 12/30/2017
 * Time: 12:56 PM
 */
/*a function is a set of statments that performs a function and returns a value
an object incorporates one or more functions into a single structure called a class
/*
/* example 5-1: 3 string functions*/
echo strrev(" .dlrow olleH"); //reverse string
echo str_repeat("Hip ", 2); //repeat string
echo strtoupper("hooray!"); //string to uppercase


/*Syntax for functions(function names are case INSENSITIVE):
function function_name([parameter[, ...]])
{
//statements
}
*/

$lowered =strtolower("ANNA KhamSAMran"); //all lowercase
echo $lowered;

$ucfixed=ucfirst("anna khamSAMran"); //only changes first letter to uppercase
echo $ucfixed

/*example 5-2 cleaning up a full name:*/
//echo fix_names("WILLIAM", "henry", "gatES");//Parse error: syntax error,
// unexpected 'echo' (T_ECHO), expecting ',' or ';'
/*echo fix_names("WILLIAM", "henry", "gatES");
function fix_names($n1, $n2, $n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return $n1. " ". $n2 ." " .$n3;
}*/
/*Parse error: syntax error, unexpected '$names' (T_VARIABLE),
expecting ',' or ';' */
/*$names = fix_names("WILLIAM", "henry", "gatES");
echo $names[0] . " " . $names[1] . " " . $names[2];
  function fix_names($n1, $n2, $n3)
  {
	  $n1 = ucfirst(strtolower($n1));
	  $n2 = ucfirst(strtolower($n2));
	  $n3 = ucfirst(strtolower($n3));

	  return $n1 . " " . $n2 . " " . $n3;
  }*/

/*example 5-4 returning values from a function by referenceCHANGE IF YOU SEE IN OLD CODE &*/
//Parse error: syntax error, unexpected '$a1' (T_VARIABLE), expecting ',' or ';'
/*$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";
echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names($a1, $a2, $a3);
echo $a1 , " " . $a2 . " " . $a3;
function fix_names (&$n1, &$n2, &$n3);
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
}*/

/* example 5-5 returning values in global variables*/
// Parse error: syntax error, unexpected '$a1' (T_VARIABLE), expecting ',' or ';'
// $a1 = "WILLIAM";
/*$a2 = "henry";
$a3 = "gatES";
echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names();
echo $a1 , " " . $a2 . " " . $a3;
function fix_names()
{
	global $a1: $a1 = ucfirst(strtolower($a1));
	global $a2: $a2 = ucfirst(strtolower($a2));
	global $a3: $a3 = ucfirst(strtolower($a3));
}*/

/*RECAP OF VARIABLE SCOPE:
LOCAL VARIABLES: accessible only from part of code where they are defined.
if they're outside of a function they can be access by all the code
outside of functions, classes, etc. if inside, can only be accessed inside.
GLOBAL VARIABLES: accessible from all parts of code
STATIC VARIABLES: accessible only within the function that declared them,
but retain value over multiple calls. (INVARIABLE, hahaha!)*/

/* INCLUDING AND REQUIRING FILES*/

/*example 5-6, INCLUDING a PHP file:*/
/*include "library.php";
//your code goes here*/

/*example 5-7 INCLUDING ONLY ONCE (this one is better, so you can control
where these are included)*/
/*include_once "library.php";
//your code goes here*/

/*example 5-8, REQUIRING a PHP file ONLY ONCE(better than using require)*/
/*require_once "library.php";
//your code goes here*/

/*example 5-9 Checking for a function's existence in a version of PHP*/
/*if (function_exists("array_combine"))
{
	echo "Function exists";
}
else
{
	echo "Function does not exist - better write our own";
}*/

/*phpversion*/


/* CLASS TERMINOLOGY
OBJECT: an instance of the class
CLASS: composite of data and code
INSTANCE=OBJECT
PROPERTIES: the data held by the class
METHODS: functions used by the class
ENCAPSULATE classes to deny outside code directaccess to its data
INTERFACE: methods used to access data within the class
INHERITANCE: using properties from another class
SUPERCLASS: original class
SUBCLASS: derived class*/


/*example 5-10 Declaring a class and examining an object
print_r "r" means in human readable format*/
/*Parse error: syntax error, unexpected 'print_r' (T_STRING),
expecting ',' or ';'*/
/*print_r($object);
class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
}*/
/* output will be:
User Object
(
[name] =>
[password] =>
)
OR
User Object ([name] => [password] =>)*/

/*Creating an Object:
$object = new User; //assign an object to the User class
$temp = new User('name', 'password'); //pass parameters to the call

/* Accessing Objects: example 5-11 Creating and interacting with an object
to access an object's property: $object->property(),
to access an object's method:   $object->method()
*/
/*$object = new User;
print_r($object); echo "<br>";

$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo "<br>";


$object->save_user();

class User
{
	public $name, $password;

	function save_user()
	{
		echo "Save User code goes here";
	}
}*/
/*OUTPUT of above should be:
User Object
User Object
(
[name] =>
[password] =>
)
User Object
(
[name] = Joe
[password] = mypass
)
Save User code goes here
*/

/*CLONING OBJECTS: example 5-12 Copying and object:*/
/*
$object1 = new User();
$object1->name = "Alice";
$object2 = $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name;

class User
{
	public $name;
}
*/
/*OUTPUT for above should be:
object1 name = Amy
object2 name = Amy
*/

/* example 5-13 CLONING and object:*/
/*
$object1 = new User();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . object2->name;

class User
{
public $name;
}
*/
/*OUTPUT of above should be:
object1 name = Alice
object2 name = Amy
*/
?>
