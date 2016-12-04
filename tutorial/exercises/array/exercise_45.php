<p></p>
<b>45.</b>Write a PHP script to do a multi-dimensional difference, i.e. returns values of the first array that are not in second array. <br>
Sample:<br>
$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) ); <br>

$color2 = array( array('Green', 70), array('Black', 95) ); <br>

<p></p>
Output:<br>
Array <br>
( <br>
[0] => Array <br>
( <br>
[0] => Red <br>
[1] => 80 <br>
) <br>
<br>
[2] => Array <br>
( <br>
[0] => white <br>
[1] => 60 <br>
) <br>
<br>
) <br>
<p></p>
<b>Answer :</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 05/12/2016
 * Time: 00:00
 */

$color1 = array( array('Red', 80), array('Green', 70), array('white', 60) );

$color2 = array( array('Green', 70), array('Black', 95) );

function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}


$result=array_udiff($color1,$color2,"myfunction");
echo "<pre>";
print_r($result);