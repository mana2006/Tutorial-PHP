<p></p>
<b>10.</b> Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm.  <br>
According to Wikipedia "Bead sort is a natural sorting algorithm, developed by Joshua J. Arulanandham,<br>
Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of <br>
bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to <br>
be significantly slower in software and can only be used to sort lists of positive integers".<br>
Sample Data : <br>
Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 )<br>
Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )<br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 20/11/2016
 * Time: 22:36
 */

$arrNew = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
for ($i = 0; $i < count($arrNew); $i++) {
    for ($j = $i + 1; $j < count($arrNew); $j++) {
        if ($arrNew[$i] < $arrNew[$j]) {
            $temp = $arrNew[$i];
            $arrNew[$i] = $arrNew[$j];
            $arrNew[$j] = $temp;
        }
    }
}
print_r($arrNew);