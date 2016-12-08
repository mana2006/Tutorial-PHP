<p></p>
<b>2.</b>Write a function to check a number is prime or not.<br>

Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.<br>

<br>

<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/8/2016
 * Time: 15:35
 */

function primeCheck($number) {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0){
            return 0;
        }
    }
    return 1;
}
$number = primeCheck(59);
if ($number == 1){
    echo "day la so nguyen to";
} else {
    echo "day ko phai la so nguyen to";
}

?>