<p></p>
<b>12.</b> Write a PHP function to change the following array's all values to upper or lower case. <br>
Sample arrays :<br>
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');<br>
Expected Output :<br>
Values are in lower case.<br>
Array ( [A] => blue [B] => green [c] => red )<br>
Values are in upper case.<br>
Array ( [A] => BLUE [B] => GREEN [c] => RED )<br>

<p><b>Answer:</b></p>

<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 11/9/2016
 * Time: 08:54
 */
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lowerString = array();
foreach ($Color as $key => $value){
    $lowerString[$key] = strtolower($value);
}
$upperString = array();
foreach ($Color as $key => $value){
    $upperString[$key] = strtoupper($value);
}

echo "Values are in lower case. <br>";
print_r($lowerString);

echo "<p></p>";
echo "Values are in uppper case. <br>";
print_r($upperString);
?>