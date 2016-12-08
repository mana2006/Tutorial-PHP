<p></p>
<b>10.</b>Write a PHP script that creates the following table (use for loops).<br>
<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 07/12/2016
 * Time: 01:26
 */

echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $multi = $i * $j;
        echo "<td>$multi</td>";
    }
    echo "</tr>";
}
echo "</table>";