<?php
    $n = 6;
    $factorial = 1;
    for($i = 1; $i <= $n; $i++){
        $factorial *= $i;
        echo $i." -> ".$factorial."<br>";
    }
?>