<p></p>
<b>20.</b> Write a PHP function to sort an array according to another array acting as a priority list.  <br>
<p><b>Answer:</b></p>


<?php 

$order[0] = 1;
$order[1] = 3; 
$order[2] = 4; 
$order[3] = 2; 

$array[0] = 2;
$array[1] = 1; 
$array[2] = 3; 
$array[3] = 4; 
$array[4] = 2; 
$array[5] = 1; 
$array[6] = 2; 

function sortArray($a, $b) {
    global $order;
    foreach ($order as $key => $value) {
        if ($a == $value) {
            return 0;
        } elseif ($b == $value) {
            return 1;
        }
    }
}

usort($array, "sortArray");
echo "<pre>";
print_r($array);

?>

