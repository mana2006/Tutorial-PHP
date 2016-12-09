<b>1.</b>Write a simple PHP class which displays the following string. <br>
'MyClass class has initialized !'<br>
<p></p>
<b>Answer:</b><br>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/9/2016
 * Time: 10:07
 */

class Hello {
    public function __construct()
    {
        echo 'MyClass class has initialized !';
    }
}

$hello = new Hello();
