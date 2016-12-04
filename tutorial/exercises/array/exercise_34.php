<p></p>
<b>34.</b> Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values. <br>
Sample Data : <br>
$test_array = array(<br>
0 => 'example1',<br>
1 => 'Example11',<br>
2 => 'example10',<br>
3 => 'Example6',<br>
4 => 'example4',<br>
5 => 'EXAMPLE40',<br>
6 => 'example10'<br>
);<br>
OutPut:<br>
Array<br>
(<br>
[0] => example1<br>
[4] => example4<br>
[3] => Example6<br>
[2] => example10<br>
[6] => example10<br>
[1] => Example11<br>
[5] => EXAMPLE40<br>
)<br>

<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 28/11/2016
 * Time: 23:05
 */

$test_array = array(
    0 => 'example1',
    1 => 'Example11',
    2 => 'example10',
    3 => 'Example6',
    4 => 'example4',
    5 => 'EXAMPLE40',
    6 => 'example10'
);
asort($test_array, SORT_STRING | SORT_NATURAL | SORT_FLAG_CASE);

echo "<pre>";
print_r($test_array);