<p></p>
<b>4.</b>Create a script to construct the following pattern, using a nested for loop.<br>
* <br>
* * <br>
* * * <br>
* * * * <br>
* * * * * <br>
* * * * * <br>
* * * * <br>
* * * <br>
* * <br>
* <br>

<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 17:13
 */

for ($i = 0; $i <= 5; $i++) {
    $x = 0;
    while ($x <= $i) {
        echo "*";
        $x++;
    }

    echo "<br>";
}
for ($j = 0; $j <= 5; $j++) {
    for ($k = 0; $k <= 5; $k++) {
        if ($k >= $j) {
            echo "*";
        }
    }
    echo "<br>";
}

