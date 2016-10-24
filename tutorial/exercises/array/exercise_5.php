<p></p>
<b>5.</b> $color = array(4 => 'white', 6 => 'green', 11=> 'red');<br>
Write a PHP script to get the first element of the above array. <br>
<i>Expected result : </i> white <br>

<p><b>Answer:</b></p>
<?php 
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);
?>