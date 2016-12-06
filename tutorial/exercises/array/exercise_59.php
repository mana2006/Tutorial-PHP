<p></p>
<b>57.</b> Write a PHP program to create a range like the following array.<br>

Array <br>
( <br>
[20] => 2 <br>
[21] => 3 <br>
[22] => 4 <br>
[23] => 5 <br>
[24] => 6 <br>
[25] => 7 <br>
)<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 16:44
 */
echo "<pre>";
print_r(array_combine(range(20,25), range(2,7)));