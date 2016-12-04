<p></p>
<b>40.</b> Write a PHP program to get a sorted array without preserving the keys.<br>
Sample:<br>
$test_array = array();<br>
$test_array[1]    = 'xyz@example.com';<br>
$test_array[2]    = 'dse@example.com';<br>
$test_array[3]    = 'xyz@example.com';<br>
$test_array[4]    = 'mno@example.com';<br>
OutPut:<br>

Array<br>
(<br>
[3] => xyz@example.com<br>
[1] => xyz@example.com<br>
)<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 02/12/2016
 * Time: 23:08
 */

$my_array = array("red", "black", "green", "black", "white", "yellow");
echo "<pre>";
print_r(array_values(array_unique($my_array)));