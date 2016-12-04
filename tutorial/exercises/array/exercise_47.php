<p></p>
<b>47.</b> Write a PHP function to get an array with the first key and value.<br>
Sample:<br>
$colors = array('c1'=>'Red','c2'=>'Green','c3'=>'Black'); <br>

<p></p>
Output:<br>
Array <br>
( <br>
[c1] => Red <br>
) <br>
<p></p>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 05/12/2016
 * Time: 00:47
 */

$colors = array('c1'=>'Red','c2'=>'Green','c3'=>'Black');

function getFirstElement($array) {
    $i = 0;
    $arrFirstElement = array();
    foreach ($array as $key => $value) {
        if ($i < 1) {
            $arrFirstElement[$key] = $value;
        }
        $i++;
    }
    return $arrFirstElement;
}

echo "<pre>";
print_r(getFirstElement($colors));



function array_1st_element($my_array)
{
    list($k) = array_keys($my_array);

    $result  = array($k=>$my_array[$k]);
    return $result;
}

echo "<pre>";
print_r(array_1st_element($colors));
