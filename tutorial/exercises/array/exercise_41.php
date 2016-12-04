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
``
$test_array = array();
$test_array[1]    = 'xyz@example.com';
$test_array[2]    = 'dse@example.com';
$test_array[3]    = 'xyz@example.com';
$test_array[4]    = 'mno@example.com';


function showArrayNotUnique($test_array) {
    $arrProcess = array();
    $arrDuplicate = array();
    foreach ($test_array as $value) {
        if (!in_array($value, $arrProcess)) {
            $arrProcess[] = $value;
        } else {
            $arrDuplicate[] = $value;
        }
    }
    return $arrDuplicate;
}
echo "<pre>";
print_r(showArrayNotUnique($test_array));