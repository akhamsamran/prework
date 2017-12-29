<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 12/29/2017
 * Time: 12:27 PM
 */

/* exercise 4-15*/
$a = 2; $b = 3;
if ($a > $b) echo "$a is greater than $b<br>";
if ($a < $b) echo "$a is less than $b<br>";
if ($a >= $b) echo "$a is greater than or equal to $b<br>";
if ($a <= $b) echo "$a is less than or equal to $b<br>";

/*exercise 4-16*/
$a = 1; $b = 0;
echo ($a AND $b) . " (1)<br>";
echo ($a or $b) . " (2)<br>";
echo ($a XOR $b) . " (3)<br>";
echo !$a . " (4)<br>";

/*exercise 4-17*/
//Fatal error: Uncaught Error: Call to undefined function getnext()
/*if ($finished == 1 OR getnext() == 1) exit;
/*exercise 4-18*/
/*$gn = getnext();
if ($finished == 1 OR $gn == 1) exit;*/

/*exercise 4-19*/
//error:  Undefined variable: bank_balance
/*if ($bank_balance < 100)
{
	$money = 1000;
	$bank_balance += $money;
}*/

/*exercise 4-20*/
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



?>