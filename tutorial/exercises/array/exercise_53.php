<p></p>
<b>53.</b> Write a PHP script to delete a specific value from an array using array_filter() function.<br>
Sample:<br>
$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'); <br>
$given_value = 'Black'; <br>

<p></p>
Output:<br>
Array <br>
( <br>
[key1] => Red <br>
[key2] => Green <br>
[key3] => Black <br>
) <br>
Array <br>
( <br>
[key1] => Red <br>
[key2] => Green <br>
) <br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 08:36
 */
$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
$givenValue = 'Black';

echo "<pre>";
print_r(array_filter($colors, function ($element) use ($givenValue) {return $element != $givenValue ? true : false;}));

