<?php
/**
 * Created by PhpStorm.
 * User: jorisbulters
 * Date: 26-10-15
 * Time: 14:06
 */

if(isset($_POST['money'])){
    $val = $_POST['money'];
    $val = str_replace(',', '.', $val);
    echo $val . " "."dollar is ".$val*1.1014." euros.";
}else {
    echo "Je heb geen waarde ingevuld";
}
$val = str_replace(',', '.', $val);

?>
<a href="index.php"><p>Return</p></a>