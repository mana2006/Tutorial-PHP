<p></p>
<b>24.</b> Write a PHP script to sort an array using case-insensitive natural ordering . <br>
Sample Data : <br>
$colors = array(<br>
"color1", "color20", "color3", "color2"<br>
);<br>
OutPut:<br>
Colors[0] = color1<br>
Colors[1] = color2<br>
Colors[2] = color3<br>
Colors[3] = color20<br>
<p><b>Answer:</b></p>
<?php
$colors = array(
"color1", "color20", "color3", "color2");

natcasesort($colors);
echo "<pre>";
print_r($colors);