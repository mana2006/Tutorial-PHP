<p></p>
<b>28.</b> Write a PHP script to sort an array in reverse order (highest to lowest). <br>
Sample Data : <br>
$colors = array("Red", "Orange", "Black", "White");<br>

OutPut:<br>
Array<br>
(<br>
[0] => White<br>
[1] => Red<br>
[2] => Orange<br>
[3] => Black<br>
)<br>
<p><b>Answer:</b></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 27/11/2016
 * Time: 19:59
 */
$colors = array("Red", "Orange", "Black", "White");
for ($i = 0; $i < count($colors); $i++) {
    for ($j = $i + 1; $j < count($colors); $j++) {
        if ($colors[$i] < $colors[$j]) {
            $temp = $colors[$j];
            $colors[$j] = $colors[$i];
            $colors[$i] = $temp;
        }
    }
}

echo "<pre>";
print_r($colors);