<?php
/**
 * Created by PhpStorm.
 * User: jorisbulters
 * Date: 26-10-15
 * Time: 14:58
 */

function bmiCalc() {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $result = $weight / ($height * $height);
    echo "Your Body Mass Index is: " . $result . "<br>";
}
bmiCalc();
?>

<a href="index.php"><p>Return</p></a>
