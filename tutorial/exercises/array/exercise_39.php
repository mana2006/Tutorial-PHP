<p></p>
<b>39.</b> Write a PHP program to remove duplicate values from an array which contains only strings or only integers. <br>
Sample:<br>
$colors = array( <br>
0 => 'Red', <br>
1 => 'Green', <br>
2 => 'White', <br>
3 => 'Black', <br>
4 => 'Red', <br>
); <br>
<br>
$numbers = array( <br>
0 => 100, <br>
1 => 200, <br>
2 => 100, <br>
3 => -10, <br>
4 => -10, <br>
5 => 0, <br>
); <br>
<br>
OutPut:<br>
Array <br>
( <br>
[0] => Red <br>
[1] => Green <br>
[2] => White <br>
[3] => Black <br>
) <br>
Array <br>
( <br>
[0] => 100 <br>
[1] => 200 <br>
[2] => -10 <br>
[3] => 0 <br>
)
<p></p>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 02/12/2016
 * Time: 22:42
 */
$colors = array(
    0 => 'Red',
    1 => 'Green',
    2 => 'White',
    3 => 'Black',
    4 => 'Red',
);

$numbers = array(
    0 => 100,
    1 => 200,
    2 => 100,
    3 => -10,
    4 => -10,
    5 => 0,
);
echo "<pre>";
print_r(array_unique($colors));
print_r(array_unique($numbers));
