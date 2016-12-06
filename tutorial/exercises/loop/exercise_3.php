<p></p>
<b>3.</b>Create a script to construct the following pattern, using nested for loop.<br>
* <br>
* * <br>
* * * <br>
* * * * <br>
* * * * * <br>


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