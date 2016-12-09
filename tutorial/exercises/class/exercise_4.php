<b>4.</b>Write a PHP class that sorts an ordered integer array with the help of sort() function. <br>
Sample array : <br>
array(11, -2, 4, 35, 0, 8, -9)<br>
Output : <br>
Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )<br>
<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 11:17
 */
class exercise_4
{
    private $arrSort = array();

    function __construct($array)
    {
        $this->arrSort = $array;
    }

    public function sortArray() {
        sort($this->arrSort);
        return $this->arrSort;
    }
}
$sortarray = new exercise_4(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->sortArray());