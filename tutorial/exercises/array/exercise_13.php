<p></p>
<b>13.</b> Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4.  <br>
Note : Do not use any PHP control statement. <br>
Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248<br>
<p><b>Answer:</b></p>

<?php
$arrDisplay = array();
    for ($i=200; $i < 250; $i++) { 
        if ($i%4 == 0) {
            $arrDisplay[] = $i;
        }
    }
$stringDisplay = implode(",", $arrDisplay);
echo $stringDisplay;

?>