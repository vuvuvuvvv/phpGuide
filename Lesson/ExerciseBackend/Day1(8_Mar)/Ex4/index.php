<?php 
    $code = "EV2009";
    $name = "Tấm hợp kim nhôm ngoài trời EV2009";
    $amount = 500;
    $cost = 160000;
    $VAT = "0.05";
    $beforeVAT = $amount * $cost;
    $afterVAT = $cost * $amount * (1 - $VAT);
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            li {
                list-style-type: circle;
            }
        </style>
    </head>
    <body>
        <p>Mã sản phẩm: <?= $code ?></p>
        <p>Tên sản phẩm: <?= $name ?></p>
        <p>Số lượng: <?= $amount ?></p>
        <p>Đơn giá: <?= $cost ?></p>
        <p>VAT: <?= $VAT ?></p>
        <p>Tổng số tiền phải nộp:</p>
        <ul> 
            <li>Chưa áp dụng thuế VAT: <?= $beforeVAT ?></li>
            <li>Áp dụng thuế VAT: <?= $afterVAT ?></li>
        </ul>
    </body>
</html>