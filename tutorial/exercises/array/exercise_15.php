<p></p>
<b>15.</b> Write a PHP script to generate unique random numbers within a range. <br>
Sample Range : (11, 20) <br>
Sample Output : 17 16 13 20 14 19 18 15 11 12<br>

<p><b>Answer:</b></p>

<?php 

$arrOutPut = array();
$i = 11;
while ($i <= 20 || $countArr <= 9) {
    $randNumber = rand(11,20);
    if (!in_array($randNumber, $arrOutPut)) {
        $arrOutPut[] = $randNumber;
    }
    $countArr = count($arrOutPut);
    $i++;
}

$strOutPut = implode(" ", $arrOutPut);
echo $strOutPut;

// Other Ways

$range = range(11,20);
shuffle($range);
for ($i=0; $i < 10; $i++) { 
    // echo $range[$i] . " ";
}
?>