<?php
    function checkAndCal($firstNum, $lastNum) {
        if($firstNum == $lastNum) {
            $firstSum = ($firstNum + $lastNum)*3;
            echo $firstSum;
        } else {
            $lastSum = $firstNum + $lastNum;
            echo $lastSum;
        }
    }
    checkAndCal(77, 5)
?>