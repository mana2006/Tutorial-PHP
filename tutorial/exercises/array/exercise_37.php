<p></p>
<b>37.</b> Write a PHP script to count the total number of times a specific value appears in an array. <br>
Sample:<br>
$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");<br>
OutPut:<br>
Red color appears 2 time(s).<br>
<p></p>

<b>Answer :</b><br>

<p></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 29/11/2016
 * Time: 23:21
 */

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red", "c5"=>"Green", "c6"=>"Green");

function countAppears($array, $appears) {
    $i = 0;
    foreach ($array as $value) {
        if ($appears == $value) {
            $i++;
        }
    }
    return $i;
}
echo  "Green color appears " . countAppears($colors, "Green") . " time(s) <br>";