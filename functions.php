<?php
/**
 * Created by PhpStorm.
 * User: jorisbulters
 * Date: 26-10-15
 * Time: 14:21
 */

function writeHello() {
    echo "Hello!" . "<br>";
}
function writeMsg($messages) {
    echo $messages . "<br>";
}
function writeMsgTo($name, $message ){
    echo $name . ", a message to you: " . $message . "<br>";
}
function addNumbers ($num1, $num2){
//echo $num1 + $num2;
    return $num1 + $num2;
}
function calcRectNumb($num3, $num4){
    return $num3 * $num4;
}
?>





