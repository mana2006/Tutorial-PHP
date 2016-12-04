<p></p>
<b>46.</b> Write a PHP function to check whether all array values are strings or not.<br>
Sample:<br>
$arr1 = array('PHP', 'JS', 'Python');<br>
$arr2 = array('SQL', 200, 'MySQL');<br>

<p></p>
Output:<br>
bool(true) <br>
bool(false) <br>
<p></p>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 05/12/2016
 * Time: 00:26
 */

$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');

function checkStringInArray($array) {
    $flg = 0;
    foreach ($array as $value) {
        if (!is_string($value)) {
            $flg++;
        }
    }
    if ($flg > 0) {
        return "false";
    } else {
        return "true";
    }
}

print_r(checkStringInArray($arr1));
echo "<br>";
print_r(checkStringInArray($arr2));