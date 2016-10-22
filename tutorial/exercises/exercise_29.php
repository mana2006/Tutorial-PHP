<p></p>
<b>28.</b> Write a PHP script to get the directory path used for temporary files. </br>

<b>Answer :</b>
<p></p>

<?php  
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');

echo $temp_file;
?>