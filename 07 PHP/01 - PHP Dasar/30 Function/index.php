<?php 

    $nama = "Udin";

    function printingTeks($param1) {
        echo "Hallo $param1";
        global $nama;
        echo "Hallo $nama";
    }

    printingTeks("Hamster");


?>

<a href="./index2.php">a</a>