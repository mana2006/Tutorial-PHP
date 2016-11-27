<p></p>
<b>26.</b> Write a PHP function to shuffle an associative array, preserving key, value pairs. <br>
Sample Data : <br>
$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");<br>
<p><b>Answer:</b></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 27/11/2016
 * Time: 11:54
 */

$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");

function shuffle_array($array) {
    $key = array_keys($array);
    shuffle($key);
    $arrNew = array();
    foreach ($key as $value) {
        $arrNew[$value] = $array[$value];
    }
    return $arrNew;
}
echo "<pre>";
var_dump(shuffle_array($colors));