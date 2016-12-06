<p></p>
<b>57.</b> Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.

('x', 'y', 'y'), (10, 20, 30)<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/6/2016
 * Time: 16:35
 */
function combine_Array($keys, $values)
{
    foreach ($keys as $k => $v) {
        $arrNew[$keys[$k]][] = $values[$k];
    }
    return $arrNew;
}
$array1 = array('x', 'y', 'y');
$array2 = array(10, 20, 30);
echo "<pre>";
print_r(combine_Array($array1, $array2));
