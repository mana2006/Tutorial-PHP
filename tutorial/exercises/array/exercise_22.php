<p></p>
<b>22.</b> Write a PHP script to sort the following array by the day (page_id) and user name. <br>
Output : <br>
$arra[0]: 2025731450 user_name: Illiya<br>
$arra[1]: 2025731470 user_name: Sana<br>
$arra[2]: 1025731456 user_name: Robin<br>
$arra[3]: 1025731460 user_name: Samantha<br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 20/11/2016
 * Time: 00:36
 */
$arra[0]["transaction_id"] = "2025731470";
$arra[1]["transaction_id"] = "2025731450";
$arra[2]["transaction_id"] = "1025731456";
$arra[3]["transaction_id"] = "1025731460";
$arra[0]["user_name"] = "Sana";
$arra[1]["user_name"] = "Illiya";
$arra[2]["user_name"] = "Robin";
$arra[3]["user_name"] = "Samantha";


for ($i = 0; $i < count($arra); $i++){
    for ($j = $i + 1; $j < count($arra); $j++) {
        if ($arra[$i]['transaction_id'] == $arra[$j]['transaction_id']) {
            $temp = $arra[$i]['user_name'];
            $arra[$i]['user_name'] = $arra[$j]['user_name'];
            $arra[$j]['user_name'] = $temp;
        } else {
            $temp = $arra[$i]['transaction_id'];
            $arra[$i]['transaction_id'] = $arra[$j]['transaction_id'];
            $arra[$j]['transaction_id'] = $temp;
        }
    }
}

for ($i = 0; $i < count($arra); $i++) {
    echo "$"."arra[".$i."]:". $arra[$i]['transaction_id']." user_name: ". $arra[$i]['user_name']."<br>";
}