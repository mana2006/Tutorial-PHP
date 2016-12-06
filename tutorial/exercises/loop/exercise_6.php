<p></p>
<b>6.</b>Write a program which will give you all of the potential combinations of a two-digit <br>
decimal combination, printed in a comma delimited format. <br>
00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, <br>
26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,  <br>
52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77,  <br>
78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, <br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 06/12/2016
 * Time: 23:32
 */

for ($i = 0; $i <= 9; $i++) {
    for($j = 0; $j <= 9; $j++) {
        echo $i.$j.",";
    }
}