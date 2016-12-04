<p></p>
<b>44.</b> Write a PHP a function to remove a specified, duplicate entry from an array.<br>
Sample:<br>
$numbers = array(4, 5, 6, 7, 4, 7, 8);<br>

<p></p>
Output:<br>
Array <br>
( <br>
[0] => 4 <br>
[1] => 5 <br>
[2] => 6 <br>
[3] => 7 <br>
[4] => 4 <br>
[6] => 8 <br>
) <br>
<p></p>
<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 04/12/2016
 * Time: 21:15
 */
$numbers = array(4, 5, 6, 7, 4, 7, 8);


function destroyArrayUnique($array, $number) {
    $arrUnique = array();
    $arrNotUnique = array();
    foreach ($array as $index => $value) {
        if(!in_array($value, $arrNotUnique)) {
            $arrNotUnique[$index] = $value;
        } else {
            $arrUnique[$index] = $value;
        }
    }
    foreach ($arrUnique as $indexDestroy => $value) {
        if ($value == $number) {
            unset($array[$indexDestroy]);
        }
    }
    return $array;
}
echo "<pre>";
print_r(destroyArrayUnique($numbers, 4));