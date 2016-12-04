<p></p>
<b>36.</b> Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values. <br>
OutPut:<br>
Array <br>
( <br>
[0] => Red <br>
[1] => Green <br>
[2] => Black <br>
[3] => White <br>
)
Array <br>
( <br>
[0] => red <br>
[1] => green <br>
[2] => black <br>
[3] => white <br>
) <br>
Array <br>
( <br>
[0] => RED <br>
[1] => GREEN <br>
[2] => BLACK <br>
[3] => WHITE <br>
) <br>

<p></p>
<b>Answer :</b><br>
<p></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 29/11/2016
 * Time: 22:26
 */

$colors = array( "Red", "Green", "Black", "White");
echo "<pre>";
print_r($colors);


echo "<p></p>";

$colorLower = array();
foreach ($colors as $key => $value) {
    $colorLower[$key] = strtolower($value);
}

print_r($colorLower);


echo "<p></p>";

$colorUpper = array();
foreach ($colors as $key => $value) {
    $colorUpper[$key] = strtoupper($value);
}

print_r($colorUpper);