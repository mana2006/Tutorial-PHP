<p></p>
<b>23.</b> Write a PHP program to sort a multi-dimensional array set by specific key. <br>

<p><b>Answer:</b></p>

<?php
function column_Sort($unsorted, $column) {
    for ($i = 0; $i < count($unsorted); $i++) {
        for ($j = $i + 1; $j < count($unsorted); $j++) {
            if ($unsorted[$i][$column] > $unsorted[$j][$column]) {
                $temp = $unsorted[$i][$column];
                $unsorted[$i][$column] = $unsorted[$j][$column];
                $unsorted[$j][$column] = $temp;
            }
        }
    }
    return $unsorted;
}
$my_array = array();
$my_array[0]['name'] = 'Sana';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';

$my_array[1]['name'] = 'Robin';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';

$my_array[2]['name'] = 'Sofia';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';
echo "<pre>";
//for ($i = 0; $i < count($my_array); $i++) {
    print_r(column_Sort($my_array, 'country'));
//}



?>