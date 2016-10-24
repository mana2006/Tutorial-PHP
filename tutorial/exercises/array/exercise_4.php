<p></p>
<b>4.</b> $x = array(1, 2, 3, 4, 5);array_splice($a1,0,2,$a2);<br>
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.<br>
<i>Sample Output :</i> <br>
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } <br>
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) } <br>

<p><b>Answer:</b></p>
<?php 
$x = array(1, 2, 3, 4, 5);
var_dump($x);
echo "<br>";
unset($x[3]);
$x1 = array_values($x);
var_dump($x1);


?>