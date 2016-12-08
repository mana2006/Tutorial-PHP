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
$flag = true;
$color = [
    true => 'white',
    false => 'black'
];
for ($i = 1; $i <= 9; $i++) {
    $table .= "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        $table .= "<td width='30px' height='30px' bgcolor=$color[$flag]></td>";
        $flag = !$flag;
    }
    $table .= "</tr>";
}
echo $table .= "</table>";