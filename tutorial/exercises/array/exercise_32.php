<p></p>
<b>32.</b> Write a PHP program to get the extension of a file. <br>
$file='example.txt';<br>
OutPut:<br>
txt<br>
<p><b>Answer:</b></p>
<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 28/11/2016
 * Time: 00:02
 */
$file='example.txt';
$ext = pathinfo($file, PATHINFO_EXTENSION);
echo $ext;

echo "<p></p>";
//OHTER WAY

function getExtension($file) {
   $arrFile = explode(".", $file);
   $extension = array_pop($arrFile);
   return $extension;
}

print_r(getExtension($file));


echo "<p></p>";
//OHTER WAY

function file_extension($str1){
    $str1=implode("",explode("\\",$str1));
    var_dump($str1);
    $str1=explode(".",$str1);
    $str1=strtolower(end($str1));
    return $str1;
}

$file='example.txt';
echo "<br>".file_extension($file)."<br>";
