<p></p>
<b>5.</b>Write a program to calculate and print the factorial of a number using a for loop. <br>
The factorial of a number is the product of all integers up to and including that number, <br>
so the factorial of 4 is 4*3*2*1=24 <br>

<b>Answer :</b><br>
<p></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 06/12/2016
 * Time: 22:21
 */

$n = 6;
$x = 1;
for ($i = 1 ; $i <= $n; $i++){
    $x *= $i;
}
echo "The factorial of $n = $x";
?>