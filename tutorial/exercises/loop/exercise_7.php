<p></p>
<b>7.</b>Write a program which will count the "r" characters in the text "w3resource".<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 06/12/2016
 * Time: 23:54
 */

$text="sw3resources";
$search_char="s";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if (substr($text, $i, 1) == $search_char) {
        $count++;
    }
}
echo $count;