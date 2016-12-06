<p></p>
<b>11.</b>Write a PHP program which iterates the integers from 1 to 100.
For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz".
For numbers which are multiples of both three and five print "FizzBuzz".<br>

<br>
<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 07/12/2016
 * Time: 01:43
 */

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "Fizz" ."<br>";
    } elseif ($i % 5 == 0) {
        echo $i ."Buzz" ."<br>";
    } else {
        echo $i."<br>";
    }
}