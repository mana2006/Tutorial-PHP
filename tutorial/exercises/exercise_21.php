<p></p>
<b>21.</b> Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator. </br>

<b>Answer :</b>

<form action="exercise_21.php" method="post" accept-charset="utf-8">
    <input type="text" name="number">
    <button type="submit">Submit</button>
</form>


<?php  
    if (!empty($_POST['number'])) {
        $number = $_POST['number'];
        if ($number > 10) {
            echo "$number greater than 10";
        } elseif ($number > 20) {
            echo "$number greater than 20";
        } elseif ($number > 30) {
            echo "$number greater than 30";
        } else {
            echo "$number is smaller than 10, 20 and 30";
        }
    } else {
        echo "Please input your number !!!";
    }

?>