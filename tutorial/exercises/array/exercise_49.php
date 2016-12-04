<p></p>
<b>49.</b> Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.<br>
Sample:<br>
$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');<br>
$second_array = array('c2', 'c4'); <br>

<p></p>
Output:<br>
Array <br>
( <br>
[c2] => Green <br>
[c4] => Black <br>
) <br>
<p></p>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 05/12/2016
 * Time: 01:11
 */

$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$second_array = array('c2', 'c4');

$arrUnion = array();
foreach ($second_array as $value) {
    $arrUnion[$value] = $first_array[$value];
}
echo "<pre>";
print_r($arrUnion);