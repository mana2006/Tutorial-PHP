<b>6.</b>Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.<br>
<br>
For example :<br>
$mycalc = new MyCalculator( 12, 6); <br>
echo $mycalc- > add(); // Displays 18 <br>
echo $mycalc- > multiply(); // Displays 72 <br>
<br>
<p></p>
<b>Answer:</b><br>
<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 17:06
 */
class exercise_6
{
    private $numberA = 0;
    private $numberB = 0;

    function __construct($a, $b)
    {
        $this->numberA = $a;
        $this->numberB = $b;
    }

    public function add() {
        $sum = $this->numberA + $this->numberB;
        return $sum;
    }

    public function multiply() {
        $multi = $this->numberA * $this->numberB;
        return $multi;
    }

}

$calculate = new exercise_6(12, 6);
echo $calculate->add();
echo "<br>";
echo $calculate->multiply();

