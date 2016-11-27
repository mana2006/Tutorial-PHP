<p></p>
<b>21.</b> Write a PHP function to sort subnets. <br>
output: <br>
$subnet_list = <br>
array('192.169.12', <br>
'192.167.11', <br>
'192.169.14', <br>
'192.168.13', <br>
'192.167.12', <br>
'122.169.15', <br>
'192.167.16' <br>
); <br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 18/11/2016
 * Time: 22:44
 */

$subnet_list =
    array(
        '192.169.12',
        '192.167.11',
        '192.169.14',
        '192.168.13',
        '192.167.12',
        '122.169.15',
        '192.167.16'
    );
for ($i = 0; $i < count($subnet_list); $i++) {
    for ($j = $i + 1; $j < count($subnet_list); $j++) {
        if ($subnet_list[$i] > $subnet_list[$j]) {
            $temp = $subnet_list[$i];
            $subnet_list[$i] = $subnet_list[$j];
            $subnet_list[$j] = $temp;
        }
    }
}
echo "<pre>";
print_r($subnet_list);

/*function sortSubNet($a, $b) {
    $aArr = explode('.',$a);
    $bArr = explode('.',$b);
    foreach (range(0,3) as $i) {
        if ($aArr[$i] < $bArr[$i]) {
            return -1;
        } elseif ($aArr[$i] > $bArr[$i]) {
            return 1;
        }
    }
    return -1;
}

usort($subnet_list, "sortSubNet");
echo "<pre>";
print_r($subnet_list);*/



//OTHER WAYS
echo "<p>";
echo "OTHER WAYS : <br><br><br>";
$subnet_list =
    array(
        '192.169.12',
        '192.167.11',
        '192.169.14',
        '192.168.13',
        '192.167.12',
        '122.169.15',
        '192.167.16'
    );

natsort($subnet_list);
echo implode('<', $subnet_list);
echo "<pre>";
print_r($subnet_list);