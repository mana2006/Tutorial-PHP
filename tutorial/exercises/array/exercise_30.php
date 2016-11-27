<p></p>
<b>30.</b> Write a PHP program to create a letter range with arbitrary length. <br>
OutPut:<br>
Array<br>
(<br>
[0] => A<br>
[1] => B<br>
[2] => C<br>
[3] => D<br>
[4] => E<br>
[5] => F<br>
[6] => G<br>
)<br>
<p><b>Answer:</b></p>

<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 27/11/2016
 * Time: 22:28
 */

function letterRange($lenght) {
    $range = range("A", "Z");
    $newRange = array();
    for ($i = 0; $i < $lenght;$i++) {
        $newRange[] = $range[$i];
    }
    echo "<pre>";
    var_dump($newRange);
}

letterRange(10);


//OTHER WAY

function letter_range($length)
{
    $data_range = array();
    $letters = range('A', 'Z');
    for($i=0; $i<$length; $i++)
    {
        $position = $i*26;
        foreach($letters as $ii => $letter)
        {
            $position++;
            if($position <= $length)
                $data_range[] = ($position > 26 ? $data_range[$i-1] : '').$letter;
        }
    }
    return $data_range;
}
print_r(letter_range(10));