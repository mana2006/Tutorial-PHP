<p></p>
<b>5.</b>Write a PHP function that checks if a string is all lower case.<br>
<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 08/12/2016
 * Time: 22:09
 */


function is_str_lowercase($str1)
{
    for ($sc = 0; $sc < strlen($str1); $sc++) {
        if (ord($str1[$sc]) >= ord('A') &&
            ord($str1[$sc]) <= ord('Z')) {
            return false;
        }
    }
    return true;
}
var_dump(is_str_lowercase('abc def g12'));
var_dump(is_str_lowercase('abc dEf ghi'));
?>