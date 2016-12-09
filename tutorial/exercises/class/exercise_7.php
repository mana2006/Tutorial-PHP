<b>6.</b>Write a PHP script to a convert string to Date and DateTime.<br>
Sample Date : '12-08-2004'<br>
Expected Output : 2004-12-08<br>
Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.<br>
<br>
<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 17:18
 */
class exercise_7
{
    private $date = "";
    public function exercise_7($date) {
        $this->date = $date;
    }

    public function convertNewDate() {
        $intDate = strtotime($this->date);
        return date('Y-d-m', $intDate);
    }
}
$date = new exercise_7("12-08-2004");
echo $date->convertNewDate();