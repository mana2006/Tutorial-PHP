<p></p>
<b>38.</b> Write a PHP script to count the total number of times a specific value appears in an array. <br>
Sample:<br>
$students = array(<br>
0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111111111"),<br>
1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222222222"),<br>
2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333333333"),<br>
); <br>
print_r(unique_array($students, "city_id"));<br>
OutPut:<br>

<p></p>

<b>Answer :</b><br>
Array<br>
(<br>
[0] => Array<br>
(<br>
[city_id] => 1<br>
[name] => Sara<br>
[mobile_num] => 1111111111<br>
)<br>

[1] => Array<br>
(<br>
[city_id] => 2<br>
[name] => Robin<br>
[mobile_num] => 2222222222<br>
)<br>

)<br>
<p></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 29/11/2016
 * Time: 23:47
 */

$students = array(
    0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111111111"),
    1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222222222"),
    2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333333333"),
);



