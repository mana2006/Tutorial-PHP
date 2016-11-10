<p></p>
<b>11.</b> Write a PHP program to merge (by index) the following two arrays. <br>
Sample arrays : <br>
$array1 = array(array(77, 87), array(23, 45));<br>
$array2 = array("w3resource", "com"); <br>
Expected Output :<br>
Array<br>
(<br>
    [0] => Array<br>
    (<br>
        [0] => w3resource<br>
        [1] => 77<br>
        [2] => 87<br>
    )<br>
    [1] => Array<br>
        (<br>
        [0] => com<br>
        [1] => 23<br>
        [2] => 45<br>
    )<br>
)<br>

<p><b>Answer:</b></p>

<?php 
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$i = 0;
for ($i=0; $i < count($array2); $i++) { 
    array_unshift($array1[$i], $array2[$i]);
}

// $array3 = array_merge($array1, $array2);
echo "<pre>";
print_r($array1);


echo "<p></p>";
echo "Order ways : <br>";

function merge_arrays_by_index($x, $y)
{
    $temp = array();
    $temp[] = $x;
    if(is_scalar($y)) {
        $temp[] = $y;
    } else {
    foreach($y as $k => $v) {
        $temp[] = $v;
    }
}
return $temp;
}
echo'<pre>';
print_r(array_map('merge_arrays_by_index',$array2, $array1));
?>