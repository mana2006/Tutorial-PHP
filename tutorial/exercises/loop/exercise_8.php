<p></p>
<style>
table{
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
td, th {
    display: table-cell;
    vertical-align: inherit;
}
</style>
<b>8.</b>Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.<br>
<table border="1">
   <tr>
       <td>
           1 * 1 = 1
       </td>
       <td>
           1 * 2 = 2
       </td>
       <td>
           1 * 3 = 3
       </td>
       <td>
           1 * 4 = 4
       </td>
       <td>
           1 * 5 = 5
       </td>
   </tr>
    <tr>
        <td>
            2 * 1 = 2
        </td>
        <td>
            2 * 2 = 4
        </td>
        <td>
            2 * 3 = 6
        </td>
        <td>
            2 * 4 = 8
        </td>
        <td>
            2 * 5 = 10
        </td>
    </tr>
    <tr>
        <td>
            3 * 1 = 3
        </td>
        <td>
            3 * 2 = 6
        </td>
        <td>
            3 * 3 = 9
        </td>
        <td>
            3 * 4 = 12
        </td>
        <td>
            3 * 5 = 15
        </td>
    </tr>
    <tr>
        <td>
            4 * 1 = 4
        </td>
        <td>
            4 * 2 = 8
        </td>
        <td>
            4 * 3 = 12
        </td>
        <td>
            4 * 4 = 16
        </td>
        <td>
            4 * 5 = 20
        </td>
    </tr>
    <tr>
        <td>
            5 * 1 = 5
        </td>
        <td>
            5 * 2 = 10
        </td>
        <td>
            5 * 3 = 15
        </td>
        <td>
            5 * 4 = 20
        </td>
        <td>
            5 * 5 = 25
        </td>
    </tr>
    <tr>
        <td>
            6 * 1 = 6
        </td>
        <td>
            6 * 2 = 12
        </td>
        <td>
            6 * 3 = 18
        </td>
        <td>
            6 * 4 = 24
        </td>
        <td>
            6 * 5 = 30
        </td>
    </tr>

</table>
 <br>





----------------------------------------------------------------<br>
----------------------------------------------------------------<br>


<b>Answer :</b><br>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 07/12/2016
 * Time: 00:20
 */

$table = "<table border='1'>";
for ($i = 1; $i <= 6; $i++) {
    $table .= "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $table .= "<td> $i * $j = " . $i*$j ."</td>";
    }
    $table .="</tr>";
}
echo $table .= "</table>";