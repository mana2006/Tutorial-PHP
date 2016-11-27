<p></p>
<b>16.</b> Write a PHP script to get the largest key in an array. <br>
$arrayName = array('10' => "a", '5' => '96', '55' => '12a');<br>
Max is 55.
<p><b>Answer:</b></p>


<?php 
$arrayName = array('10' => "a", '5' => '96', '55a' => '12a');
$max = max(array_keys($arrayName));
echo "Max is $max";
?>
