<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 12/29/2017
 * Time: 12:27 PM
 */

/*example  4-15*/
$a = 2; $b = 3;
if ($a > $b) echo "$a is greater than $b<br>";
if ($a < $b) echo "$a is less than $b<br>";
if ($a >= $b) echo "$a is greater than or equal to $b<br>";
if ($a <= $b) echo "$a is less than or equal to $b<br>";

/*example 4-16*/
$a = 1; $b = 0;
echo ($a AND $b) . " (1)<br>";
echo ($a or $b) . " (2)<br>";
echo ($a XOR $b) . " (3)<br>";
echo !$a . " (4)<br>";

/*example  4-17*/
//Fatal error: Uncaught Error: Call to undefined function getnext()
/*if ($finished == 1 OR getnext() == 1) exit;
/*exercise 4-18*/
/*$gn = getnext();
if ($finished == 1 OR $gn == 1) exit;*/

/*example  4-19 if statment*/
//error:  Undefined variable: bank_balance
/*if ($bank_balance < 100)
{
	$money = 1000;
	$bank_balance += $money;
}*/

/*example 4-20 else statement*/
//Notice: Undefined variable: bank_balance
/*if ($bank_balance < 100)
{
	$money = 1000;
	$bank_balance += $money;
}
else {
	$savings += 50;
	$bank_balance -= 50;
}*/

/*example  4-21 elseif statement*/
//Notice: Undefined variable: bank_balance
/*if ($bank_balance < 100)
{
	$money = 1000;
	$bank_balance = $money;
	}
	elseif ($bank_statment > 200)
	{
		$savings += 100;
		$bank_balance -= 100;
	}
	else
	{
		$savings += 50;
		$bank_balance -=50;
	}*/

/*example 4-22/4-23/4-25 elseif vs switch statement*/
//Notice: Undefined variable: page
/*if ($page == "Home") echo "You selected Home";
elseif ($page == "About") echo "You selected About";
elseif ($page == "News") echo "You selected News";
elseif ($page == "Login") echo "You selected Login";
elseif ($page == "Links") echo "You selected Links";*/

//Notice: Undefined variable: page
/*switch ($page)
{
	case "Home":
		echo "You selected Home";
		break;
	case "About":
		echo "You selected About";
		break;
	case "News":
		echo "You selected News";
		break;
	case "Login":
		echo "You selected Login";
		break;
	case "Links":
		echo "You selected Links";
		break;
	default:
		echo "Unrecognized selection";
		break;
}*/

/*example 4-26 the ? operator*/
// Notice: Undefined variable: fuel
/*echo $fuel <= 1 ? "Fill tak now" : "There's enough fuel";*/

/*example 4-27 assigning a ? conditional result to a variable*/
//Notice: Undefined variable: fuel
/*$enough = $fuel <= 1 ? FALSE : TRUE;*/

/*$saved = $saved >= $new ? $saved : $new;*/
/*is the same as:*/
/*$saved =// Set the value of $saved to...
$saved >= $new//check $saved against $new
? //yes, comparison is true...
$saved //...so assign the currenbt value of $saved
: //No, comparison is false...
$new //... so assign the value of $new
*/

/* example 4-28 A while loop*/
/*$fuel = 10;
while ($fuel > 1)
{
	//keep driving ...
	echo "There's enough fuel";
}*/

/* example 4-29 A while loop to print 12 times table*/
/*$count = 1;
while ($count <= 12)
{
	echo "$count times 12 is " .$count * 12 . "<br>";
}*/
/*example 4-30 shortened loop in 4-29*/
/*$count = 0;
while (++$count <= 12)
	echo "$count times 12 is " . $count * 12 . "<br>";*/

/* example 4-31 Do...while loop*/
$count = 1;
do
	echo "$count times 12 is " . $count * 12 . "<br>";
while (++$count <= 12);

/*example 4-32 do..while loop, using curlty braces*/
$count = 1;
do {
	echo "$count times 12 is " . $count * 12;
	echo "<br>";
} while (++$count <= 12);

/* example 4-33 for loops*/
for ($count = 1 ; $count <= 12 ; ++$count)
	//inititalization expression; condition expression; modification expression
	echo "$count times 12 is " . $count * 12 . "<br>";
//with curly braces:
for ($count =1 ; $count <= 12 ; ++$count){
	echo "$count times 12 is " . $count * 12;
	echo "<br>";
	}
/* example separate parameters with ";" but statements within parameters with ","*/
/*for ($i = 1, $j = 1 ; $i + $j < 10 ; $i++, $j++)
//initialize $i and $j; terminating condition; modify $i $j at the end of each iteration
{
	//...
}*/

/*example 4-35 writing a filename, using a for loop with error trapping*/
/*$fp = fopen("text.txt". 'wb');
for ($j = 0 ; $j < 100 ; ++$jb)
{
	$written = fwrite($fp, "data");
	if ($written == FALSE) break;
}
fclose($fp);*/



?>