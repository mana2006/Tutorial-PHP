<p></p>
<b>54.</b> Write a PHP script to remove all white spaces in an array.<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 13:40
 */

$arrString = array(" Nguyen   ", "Thanh    ", "        Hung");
$arrNew = array_map('trim', $arrString);

echo "<pre>";
print_r($arrNew);

