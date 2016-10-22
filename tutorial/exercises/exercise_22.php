<p></p>
<b>22.</b> Write a PHP script to get the full URL. </br>

<b>Answer :</b>
<p></p>

<?php
$protocol = $_SERVER['REQUEST_SCHEME'] == 'http' ? 'http' : 'https' ;
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
echo $protocol.'://'. $host . $uri;
?>