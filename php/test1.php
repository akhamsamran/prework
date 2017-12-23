<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 12/23/2017
 * Time: 12:53 PM
 */

// test1.php
$username = "Anna Khamsamran";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
?>
<?php
$y = 0;
if ($y-- == 0) echo $y; //output is -1 and $y value changed to -1
?>
<?php
$x = 9;
if (++$x == 10)  echo $x; //first increment the value of $x, then test to see if it is value of 10, if yes, then output the value
?>