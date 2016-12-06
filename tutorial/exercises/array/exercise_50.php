<p></p>
<b>50.</b> Write a PHP script to get the last value of an array without affecting the pointer.<br>
Sample:<br>
$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black'); <br>

<p></p>
Output:<br>
Green<br>
Black<br>
Green<br>
<p></p>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/5/2016
 * Time: 15:41
 */
$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black');
echo next($colors)."<br>";
$last = array_pop(array_keys(array_flip($colors)));
echo $last ."<br>";
echo current($colors) ."<br>";
