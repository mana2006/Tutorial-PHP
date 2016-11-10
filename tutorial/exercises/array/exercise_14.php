<p></p>
<b>14.</b>  Write a PHP script to get the shortest/longest string length from an array. <br>
Sample arrays : ("abcd","abc","de","hjjj","g","wer") <br>
Expected Output : The shortest array length is 1. The longest array length is 4.<br>
<p><b>Answer:</b></p>

<?php
$arrString = array("abcd","abc","de","hjjj","g","wer");
$temp = 0;
$max = 0;
$min = 0;
    foreach ($arrString as $key => $value) {
        $leng = strlen($value);
        $temp = 0;
        if ($leng > $temp) {
            $max = $leng;
        } else {
            $min = $leng;
        }

    }
    echo "The shortest array length is ". $min . ". The longest array length is " .$max .".";
?>