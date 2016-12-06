<p></p>
<b>1.</b>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 16:44
 */

for ($i = 1; $i <= 10; $i++) {
    $k = ($i < 10) ?"$i-" : "$i";
    echo $k;
}
