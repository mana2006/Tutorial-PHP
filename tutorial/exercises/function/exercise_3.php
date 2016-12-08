<p></p>
<b>3.</b>Write a function to reverse a string.<br>
<br>
<br>
<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/8/2016
 * Time: 16:37
 */
//for ($i = 6; $i >= 1; $i--) {
//    var_dump($i);
//}
//exit;
function reverveString($string) {
    $newString = "";
    for ($i = strlen($string); $i >= 0; $i--) {
        $newString .= substr($string, $i, 1);
    }
    return $newString;
}
$string = "123456789";
print_r(reverveString($string));

echo "<p></p>";
function reverveString1($string) {
    $count = strlen($string);
    if ($count == 1) {
        return $string;
    } else {
        $count--;
        return reverveString1(substr($string,1, $count)) . substr($string, 0, 1);

    }
}
print_r(reverveString1($string));