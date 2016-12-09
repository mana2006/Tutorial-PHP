<b>5.</b>Calculate the difference between two dates using PHP OOP approach.<br>
Sample Dates : 1981-11-03, 2013-09-04<br>
Expected Result : Difference : 31 years, 10 months, 1 days<br>
<br>
<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 11:33
 */

$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$diff = $edate->diff($sdate);

echo " Difference : $diff->y years, $diff->m months, $diff->d days";
