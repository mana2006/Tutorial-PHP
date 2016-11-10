<p></p>
<b>15.</b> Write a PHP script to get last modified information of a file. </br>
<i>Sample filename :</i> php-basic-exercises.php <br>
<i>Sample Output :</i> Last modified Monday, 09th June, 2014, 06:45am<br><br>
<p><b>Answer:</b></p>
<?php 
    $fileName = 'exercise_15.php';
    if (file_exists($fileName)) {
        echo "$fileName has been changed in " . date("Y-m-d H:i:s.", filemtime($fileName));
    }
?>

