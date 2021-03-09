<?php 
    $used = 100;
    $VAT = 0.1;
    $costAfterVAT;
    $costBeforeVAT;
    if($used <= 100) {
        $costAfterVAT = $used * 450;
        $costBeforeVAT = $used * 450 * 1.1 ;
    } else if (101 <= $used && $used <= 200) {
        $costAfterVAT = $used * 600;
        $costBeforeVAT = $used * 600 * 1.1 ;;
    } else if (201 <= $used && $used <= 300) {
        $costAfterVAT = $used * 750;
        $costBeforeVAT = $used * 750 * 1.1 ;;
    } else if (301 <= $used && $used <= 500) {
        $costAfterVAT = $used * 900;
        $costBeforeVAT = $used * 900 * 1.1 ;;
    } else if (501 <= $used && $used <= 1000) {
        $costAfterVAT = $used * 1000;
        $costBeforeVAT = $used * 1000 * 1.1 ;;
    } else {
        $costAfterVAT = $used * 1200;
        $costBeforeVAT = $used * 1200 * 1.1 ;;
    }
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
        <p>Tổng số tiền điện:</p>
        <ul> 
            <li>Chưa áp dụng thuế VAT: <?= $costBeforeVAT ?></li>
            <li>Áp dụng thuế VAT: <?= $costAfterVAT ?></li>
        </ul>
    </body>
</html>