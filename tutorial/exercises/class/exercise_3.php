<b>3.</b>Write a PHP class that calculates the factorial of an integer. <br>

<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 10:45
 */
class exercise_3
{
    private $number;

    public function setNumber($number) {
        if (!is_int($number)) {
            throw new InvalidArgumentException("Not a number missing argument");
        } else {
            $this->number = $number;
            return $this->_factorialNumber($this->number);
        }
    }

    private function _factorialNumber($number) {
        $multi = 1;
        for ($i = 1; $i <= $number; $i++) {
            $multi *= $i;
        }
        return $multi;
    }
}

$factorial = new exercise_3();
echo $factorial->setNumber(5);