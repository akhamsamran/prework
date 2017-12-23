<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 12/23/2017
 * Time: 12:08 PM
 */
echo "Hello world";
?>
<?php
/* This is a section
   of multi-line comments
   which will not be
   interpreted */
?>
<?php
$mycounter = 1;
$mystring  = "Hello";
//like a matchbox labeled "mystring" with "Hello" written inside of it
$myarray   = array("One", "Two", "Three");
echo $mystring;
?>
<?php // test1.php
$username = "Anna Khamsamran";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
?>
<?php
$team = array('Anna', 'mike', 'john', 'bella');
echo $team[3] //displays the name bella(because #1 is 0)
?>
<?php
$oxo = array(array('x', ' ', 'o'),
	array('o', 'o', 'x'),
	array('x', 'o', ' '));

echo $oxo[1][2];//returns 3rd element in 2nd row-the first # is the row and the 2nd is the column, remember 1 is 0

?>

