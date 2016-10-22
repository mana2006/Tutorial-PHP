<p></p>
<b>19.</b> Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers. </br>
<i>Sample Output :</i><br>
A01<br>
A02<br>
A03<br>
A04<br>
A05<br>
<p><b>Answer:</b></p>
<b>Way 1 : </b>
<p></p>
<?php
    $d = 'A00';
    $numEnd = substr($d,-1,1);
    for ($i=1; $i < 6; $i++) { 
        $numStart = substr($d, 0, 2);
        echo $numStart.$i."<br>";
    }


?>
<p></p>

<b>Way 2 (Solution in w3resource) :</b><p></p>

<?php
    $d = 'A00';
    for ($n=0; $n<5; $n++)
    {
        echo ++$d ."<br>";
    }
?>


