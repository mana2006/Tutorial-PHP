<p></p>
<b>7.</b> Write a PHP script that insert a new item in an array on any position. <br>
<i>Expected Output : </i> <br>
Original array : <br>
1 2 3 4 5 <br>
After inserting '$' the array is : <br>
1 2 3 $ 4 5 <br>

<p><b>Answer:</b></p>
<?php 
$a = array(1,2,3,4,5);
echo "Original array : <br>";
foreach ($a as $value) {
    echo $value . " ";
}
$varInsert = "$";
echo "<br>";
array_splice($a, 3, 0, $varInsert);
echo "After inserting '$' the array is : <br>";
foreach ($a as $value) {
    echo $value  . " ";
}

?>
