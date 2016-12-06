<p></p>
<b>57.</b> Write a PHP function to compares two multidimensional arrays and returns the difference.<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 15:46
 */


function multidimenssional_array_diff($arr1, $arr2)
{
    return array_diff($arr1['c'], $arr2['c']);
}
//multidimenssional arrays
$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));
$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));
print_r(multidimenssional_array_diff($color1, $color2));
