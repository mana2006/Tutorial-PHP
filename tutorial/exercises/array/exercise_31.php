<p></p>
<b>31.</b> Write a PHP program to get the index of the highest value in an associative array. <br>
$x = array(<br>
'value1' => 3021,<br>
'value2' => 2365,<br>
'value3' => 5215,<br>
'value4' => 5214,<br>
'value5' => 2145);<br>

OutPut:<br>
Index of the highest value : value3<br>
<p><b>Answer:</b></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 27/11/2016
 * Time: 23:17
 */
$x = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145);
$max = $x['value1'];
$keyMax = array();
foreach ($x as $key => $value) {
    if ($value > $max) {
        $max = $value;
        $keyMax[$key] = $value;
    }
}

$key_of_max = array_keys($keyMax);
echo "Index of the highest value : ".$key_of_max[0]."<br>";
