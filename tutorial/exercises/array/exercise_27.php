<p></p>
<b>27.</b> Write a PHP function to generate a random password <br>
(contains uppercase, lowercase, numeric and other) using shuffle() function. <br>
Sample Data : <br>
Generated Password : +o9-xv1l8Kd <br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 27/11/2016
 * Time: 12:16
 */

function generatePassword($upper = 1, $lower = 5, $numeric = 3, $other = 2) {

    $arrContent = array();

    // Get content Lower Case
    $strLower = "abcdefghijklmnopqrstuvwxyz";
    $countStrLower = strlen($strLower);
    for ($i = 0; $i < $countStrLower; $i++) {
        $strGetLower[] = substr($strLower, $i, 1);
    }
    shuffle($strGetLower);
    for ($i = 0; $i < $lower; $i++) {
        $arrContent[] = $strGetLower[$i];
    }

    // Get content Upper Case
    $strUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $countStrUpper = strlen($strUpper);
    for ($i = 0; $i < $countStrUpper; $i++) {
        $strGetUpper[] = substr($strUpper, $i, 1);
    }
    shuffle($strGetUpper);
    for ($i = 0; $i < $upper; $i++) {
        $arrContent[] = $strGetUpper[$i];
    }

    // Get content Number
    for ($i = 0; $i < $numeric; $i++) {
        $arrContent[] = rand(0,9);
    }


    // Get content Other
    $strOther = "!@#$%^&*()";
    $countStrOther = strlen($strOther);
    for ($i = 0; $i < $countStrOther; $i++) {
        $strGetOther[] = substr($strOther, $i, 1);
    }
    shuffle($strGetOther);
    for ($i = 0; $i < $other; $i++) {
        $arrContent[] = $strGetOther[$i];
    }

    shuffle($arrContent);
    $password = implode($arrContent);
    var_dump($password);

}
generatePassword();





//OTHER WAYS

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {

    $pass_order = Array();
    $passWord = '';

    //Create contents of the password
    for ($i = 0; $i < $upper; $i++) {
        $pass_order[] = chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++) {
        $pass_order[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $pass_order[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++) {
        $pass_order[] = chr(rand(33, 47));
    }

    //using shuffle() to shuffle the order
    shuffle($pass_order);

    //Final password string
    foreach ($pass_order as $char) {
        $passWord .= $char;
    }
    return $passWord;
}
echo "<br>"."Generated Password : ".rand_Pass()."<br>";