<p></p>
<b>35.</b> Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values. <br>
Sample Data : <br>
$colors = array( "Red ", " Green", "Black ", " White "); <br>
OutPut:<br>
Array <br>
( <br>
[0] => Red <br>
[1] => Green <br>
[2] => Black <br>
[3] => White <br>
)  <br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 29/11/2016
 * Time: 21:37
 */

$colors = array( "Red ", " Green", "Black ", " White ");
function printArray($value, $key){
    echo '['.$key.'] => ' . trim($value)."<br>\n";
}
array_walk($colors, 'printArray');
