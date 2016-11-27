<p></p>
<b>17.</b> Write a PHP function that returns the lowest integer that is not 0 <br>
array(-1,0,1,12,-100,1);<br>
Lowest is : -100<br>
<p><b>Answer:</b></p>


<?php 
$arrayName = array(-1,0,1,12,-100,1);
$minValue = $arrayName[0];
foreach ($arrayName as $value) {
    if ($value < $minValue && $value != 0) {
        $minValue = $value;
    }
}
echo $minValue;

echo "<p></p>";

// OTHER WAYS
echo "OTHER WAYS :"; 
echo "<p></p>";

function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");

?>
