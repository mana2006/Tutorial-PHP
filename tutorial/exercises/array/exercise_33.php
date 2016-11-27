<p></p>
<b>33.</b> Write a PHP function to search a specified value within the values of an associative array. <br>
$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math", "part4"=>"PHP Math");<br>
OutPut:<br>
PHP has found in part1<br>
PHP has found in part2<br>
PHP has found in part3<br>
PHP has found in part4<br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 28/11/2016
 * Time: 00:19
 */

$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math", "part4"=>"PHP Math");
function searchString($array, $searchString) {
    foreach ($array as $key => $value) {
        if (preg_match("/$searchString/", $value)) {
            echo $searchString . " has found in " . $key . "<br>";
        } else {
            echo $searchString . " has not found in " . $key . "<br>";
        }
    }
}

searchString($exercises, "PHP");