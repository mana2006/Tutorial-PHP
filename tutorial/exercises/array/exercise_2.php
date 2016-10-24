<p></p>
<b>1.</b> $color = array('white', 'green', 'red')  </br>
Write a PHP script which will display the colors in the following way : <br>
<i>Output :</i> <br>
white, green, red,
<ul>
    <li>white</li>
    <li>green</li>
    <li>red</li>
</ul>
<p><b>Answer:</b></p>
<?php 
    $color = array('white', 'green', 'red');
    echo "<ul>";
    foreach ($color as $value) {
        echo "<li>".$value."</li>";
    }
    echo "</ul>";
    
?>