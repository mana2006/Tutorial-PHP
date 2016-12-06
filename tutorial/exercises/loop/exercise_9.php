<p></p>
<b>9.</b>Write a PHP script using nested for loop that creates a chess board as shown below.<br>

Use table width="270px" and take 30px as cell height and width.<br>

<br>

<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 07/12/2016
 * Time: 00:40
 */

$table = "<table width='270px' border='1'>";
for ($i = 1; $i <= 8; $i++) {
    $table .= "<tr>";
    for ($j = 1; $j <= 8; $j++) {
        $total = $j+$i;
        if ($total % 2 == 0) {
            $table .= "<td width='30px' height='30px' bgcolor='black'></td>";
        } else {
            $table .= "<td width='30px' height='30px' bgcolor='white'></td>";
        }
//        if ($j % 2 == 0) {
//            $table .= "<td width='30px' height='30px' bgcolor='black'></td>";
//        } else {
//            $table .= "<td width='30px' height='30px' bgcolor='white'></td>";
//        }

    }
    $table .= "</tr>";
}
echo $table .= "</table>";