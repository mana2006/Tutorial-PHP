<p></p>
<b>52.</b> Write a PHP script to get the last value of an array without affecting the pointer.<br>
Sample:<br>
$colors = array(
0 => array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'),  <br>
1 => array('key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink')  <br>
);  <br>

<p></p>
Output:<br>
$results = array_filter_by_value($colors, 'key2', 'White');<br>
Array <br>
( <br>
[1] => Array <br>
( <br>
[key1] => Yellow <br>
[key2] => White <br>
[key3] => Pink <br>
) <br>
<br>
) <br>
<p></p>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/5/2016
 * Time: 17:10
 */

$colors = array(
    0 => array('key1' => 'Red', 'key2' => 'White', 'key3' => 'Black'),
    1 => array('key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink')
);

function arrayFilterByValue($array, $keyInput, $valueInput) {
    $arrayResult = array();
    foreach ($array as $index => $array1) {
        foreach ($array1 as $key => $valueArr1) {
            if ($valueArr1 == $valueInput && $key == $keyInput) {
                $arrayResult[$index] = $array[$index];
            }
        }
    }
    return $arrayResult;
}
echo "<pre>";
var_dump(arrayFilterByValue($colors, "key2", "White"));
