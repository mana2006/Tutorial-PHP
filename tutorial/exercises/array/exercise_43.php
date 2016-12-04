<p></p>
<b>43.</b> Write a PHP script to merge two comma separated lists with unique value only.<br>
Sample:<br>
$list1 = "4, 5, 6, 7";<br>
$list2 = "4, 5, 7, 8";<br>
<p></p>
Output:<br>
4, 5, 6, 7, 8<br>
<p></p>
<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 04/12/2016
 * Time: 20:56
 */

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
print_r(implode(",", array_unique(explode(",", $list1.",".$list2))));