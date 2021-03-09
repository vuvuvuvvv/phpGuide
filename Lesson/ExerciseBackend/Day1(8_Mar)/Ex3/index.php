<?php 
    $firstNum = 3;
    $lastNum = 5;
    $sum = $firstNum + $lastNum;
    $sub = $firstNum - $lastNum;
    $mul = $firstNum * $lastNum;
    $div = $firstNum / $lastNum;
    $remainder = $firstNum % $lastNum;
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>Tong la: <?= $sum ?></p>
        <p>Hieu la: <?= $sub ?></p>
        <p>Tich la: <?= $mul ?></p>
        <p>Thuong la: <?= $div ?></p>
        <p>Chia du duoc: <?= $remainder ?></p>
    </body>
</html>