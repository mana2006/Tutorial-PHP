<p></p>
<b>16.</b> Write a PHP script to count lines in a file. </br>
Note : Store a text file name into a variable and count the number of lines of text it has. <br>
<p><b>Answer:</b></p>

<?php
    $countLine = file("exercise_15.php");
    $line = count($countLine);
    echo "All line in this file is : ".$line;
?>