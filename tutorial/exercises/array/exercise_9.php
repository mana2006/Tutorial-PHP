<p></p>
<b>9.</b> Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. <br>
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73<br>
Expected Output :<br>
Average Temperature is : 70.6<br>
List of seven lowest temperatures : 60, 62, 63, 63, 64,<br>
List of seven highest temperatures : 76, 78, 79, 81, 85,<br>

<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 05/11/2016
 * Time: 11:19
 */

$arrTemp = array(
    78, 60, 68, 71, 68, 73, 85, 66,
    64, 76, 63, 75, 90, 73, 68, 73,
    72, 65, 74, 62, 65, 64, 68, 73,
    75, 79, 73);

$valueAvgTemp = 0;
foreach ($arrTemp as $key => $value) {
    $valueAvgTemp += $value;
}
echo "Average Temperature is : " . round($valueAvgTemp/count($arrTemp), 1) . "<br>";

function minValue($array) {
    for ($i=0; $i < 5; $i++) { 
        $arrMin[] = $delVal = min($array);
        $key = array_search($delVal, $array);
        unset($array[$key]);
    }
    return $arrMin;
}

function maxValue($array) {
    for ($i=0; $i < 5; $i++) { 
        $arrMin[] = $delVal = max($array);
        $key = array_search($delVal, $array);
        unset($array[$key]);
    }
    asort($arrMin);
    return $arrMin;
}

?>