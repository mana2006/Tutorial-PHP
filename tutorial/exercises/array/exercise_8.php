<p></p>
<b>8.</b> Write a PHP script to sort the following associative array : Go to the editor
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in  <br>
a) ascending order sort by value <br>
b) ascending order sort by Key <br>
c) descending order sorting by Value <br>
d) descending order sorting by Key <br>

<p><b>Answer:</b></p>


<?php 
$arrVal = array(
    "Sophia2"=>"32",
    "Sophia3"=>"31",
    "Sophia4"=>"312",
    "Sophia5"=>"314",
    "Sophia6"=>"317",
    "Sophia7"=>"31",
    "Sophia"=>"31",
    "Jacob"=>"41",
    "William"=>"39",
    "Ramesh"=>"40");

/**
 * if 0 la equal
 * if -1 tang dan
 * if 1 giam dan
 * @param  [type] $key   [description]
 * @param  [type] $value [description]
 * @return [type]        [description]
 */


// Type A

function ascSortValue($a,$b)
{

    /*if ($a%2==0) {
        if($b%2==0){
            return ($a < $b) ? -1 : 1;
        } else {
            return 1;
        }
    }else{
        if($b%2==0){
            return -1;
        }else{
            return ($a < $b) ? -1 : 1;;
        }
    }*/
    if ($a == $b) {
        return 0;
    }
return ($a < $b) ? -1 : 1;

    // ----------------------- level is upper -----------------------

    // if($a%2==0){
    //     if($b%2==0){
    //         return ($a < $b) ? -1 : 1;
    //     }else{
    //         return 1;
    //     }
    // }else{
    //     if($b%2==0){
    //         return -1;
    //     }else{
    //         return ($a < $b) ? -1 : 1;;
    //     }
    // }

//  ------------------- level is lower ------------------------
    if ($a == $b) {
        return 0;
    }

    return ($a < $b) ? -1 : 1;

}
uasort($arrVal,"ascSortValue");
echo "a) ascending order sort by value <br>";
foreach ($arrVal as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value ."<br>";
}


// Type B

echo "<p></p>";
echo "b) ascending order sort by Key <br>";
ksort($arrVal);
foreach ($arrVal as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value ."<br>";
}

// Type C

echo "<p></p>";
echo "c) descending order sort by Value <br>";
function descSortKey ($a, $b){
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}

uasort($arrVal, "descSortKey");

foreach ($arrVal as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value ."<br>";
}

// Type D
echo "<p></p>";
echo "d) descending order sort by Key <br>";
krsort($arrVal);
foreach ($arrVal as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value ."<br>";
}
?>

