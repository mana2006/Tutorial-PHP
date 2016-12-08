<p></p>
<b>6.</b>Write a PHP function that checks whether a passed string is a palindrome or not?<br>
A palindrome is word, phrase, or sequence that reads the same backward as forward, e.g., madam or nurses run.<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 08/12/2016
 * Time: 23:22
 */
function check_palindrome($string)
{
    if ($string == strrev($string)){
        return 1;
    } else {
        return 0;
    }
}
echo check_palindrome('run')."\n";