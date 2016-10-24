<p></p>
<b>30.</b> Write a PHP script to get the time of the last modification of the current page. </br>

<b>Answer :</b>
<p></p>

<?php
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>