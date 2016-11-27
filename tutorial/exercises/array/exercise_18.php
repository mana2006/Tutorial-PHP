<p></p>
<b>18.</b> Write a PHP function to floor decimal numbers with precision. <br>
Note: Accept three parameters number, precision and $separator <br>
Sample Data : <br>
1.155, 2, "."<br>
100.25781, 4, "."<br>
-2.9636, 3, "."<br>

Expected Output : <br>
1.15 <br>
100.2578 <br>
-2.964<br>
<p><b>Answer:</b></p>


<?php 

function floorDecimal($number, $precision, $separator)
{
    $separatorNumber = explode("$separator", $number);
    $countSeparator = count($separatorNumber);
    if ($countSeparator > 1 && $countSeparator < 3) {
        $newSeparator = substr($separatorNumber[1], 0, $precision);
        $roundNum = substr($separatorNumber[1],$precision,1);
        $newSeparator = $separatorNumber[0] > 0 ? $newSeparator : $newSeparator + 1;
        $newNumber = $separatorNumber[0].$separator.$newSeparator;
        echo $newNumber;
    }
    return 0;

}


floorDecimal(1.155, 2, ".");echo "<br>";
floorDecimal(100.25781 , 4, ".");echo "<br>";
floorDecimal(-2.9636 , 3, ".");echo "<br>";

echo "<p></p>";

// OTHER WAYS

function floorDec($number, $precision, $separator) {
    $number_part=explode($separator, $number);
    $number_part[1]=substr_replace($number_part[1],$separator,$precision,0);

    if($number_part[0]>=0) {
        $number_part[1]=floor($number_part[1]);
    } else {
        $number_part[1]=ceil($number_part[1]);
    }
    $ceil_number= array($number_part[0],$number_part[1]);
    return implode($separator,$ceil_number);
}

print_r(floorDec(1.155, 2, ".")."\n");  
print_r(floorDec(100.25781, 4, ".")."\n");  
print_r(floorDec(-2.9636, 3, ".")."\n"); 

?>
