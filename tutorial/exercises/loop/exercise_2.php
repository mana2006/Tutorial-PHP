<p></p>
<b>2.</b>Create a script using a for loop to add all the integers between 0 and 30 and display the sum..<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 16:44
 */
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo $sum;

