<p></p>
<b>4.</b>Write a function to sort an array.<br>
<br>
<br>
<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/8/2016
 * Time: 18:00
 */

function arraySort($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$a = array(51,14,1,21,'hj');
print_r(arraySort($a));