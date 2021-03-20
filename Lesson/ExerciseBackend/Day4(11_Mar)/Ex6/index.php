<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cars=array(1,2,3,4,5,6,7,8,9);
        $lenCut = 7;
        $arrCut = array_chunk($cars,$lenCut);
        echo "<pre>";
        $lenghtArr = count($arrCut);
        for($i = 0; $i<$lenghtArr; $i++){
            echo "[";
            for($j = 0; $j<count($arrCut[$i]); $j++){
                    echo $arrCut[$i][$j]." ";
                }
                echo "] ";
                }
        echo "</pre>";
    ?>
</body>
</html>


