<p></p>
<b>19.</b> Write a PHP script to print "second" and Red from the following array. <br>
Sample Data : <br>
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"), <br>
"numbers" => array ( 1, 2, 3, 4, 5, 6 ), <br>
"holes" => array ( "First", 5 => "Second", "Third")); <br>
<p><b>Answer:</b></p>


<?php 

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));

echo $color['holes'][5]."<br>";
echo $color['color']['a']."<br>";

?>

