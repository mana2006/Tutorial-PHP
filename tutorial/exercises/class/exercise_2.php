<b>2.</b>Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. <br>

<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 10:39
 */
class exercise_2
{
    public $message = "Hello All, I am ";
    public function getName($name) {
        return $this->message.$name;
    }
}

$test = new exercise_2();
echo $test->getName("Hung");