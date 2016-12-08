<p></p>
<b>13.</b>Write a PHP program to print alphabet pattern 'A'.<br>
Expected Output: <br>
<pre>
*****  ***
  *   *   *
  *   *****
  *   *   *
  *   *   *
</pre>
<br>
<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/7/2016
 * Time: 09:21
 */
echo "<p>T:</p>";

for ($row = 1; $row <= 7; $row++) {
    for ($column = 1; $column = 5; $column++) {

    }
}

echo "<p>A:</p>";

for ($rows = 1; $rows <= 6; $rows++) {
    for ($column = 1; $column <= 4; $column++) {
        if ($rows == 1 && ($column == 1 || $column == 4)) {
            echo "&nbsp&nbsp";
        } elseif ($rows == 1 && $column > 1 && $column < 4) {
            echo "*";
        }
        if (($rows > 1 && $rows <=1 || $rows >= 4 && $rows <=5) && ($column == 2 || $column == 4)){
            echo "*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        if ($rows == 3) {
            echo "*";
        }
    }
    echo "<br>";
}
