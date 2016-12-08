<p></p>
<b>1.</b>Write a function to calculate the factorial of a number (a non-negative integer).
The function accepts the number as an argument. <br>

<br>
<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/8/2016
 * Time: 13:09
 */

function factorialOfNumber($number) {
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorialOfNumber($number -1);
    }
}

print_r(factorialOfNumber(6));