<?php
	$arr = array(1, 2, 3, 8 , 6 , 3 , 4 , 0);
	$max = $arr[0];
	$indexLast = count($arr) -1;
	$min = $arr[0];
	$swapMax;
	$swapMin;
	for($i =0; $i <= $indexLast; $i++){
		if($max < $arr[$i]){
			$swapMax = $max;
			$max = $arr[$i];
			$arr[$i] = $swapMax;
		}
	};
	for($j =0; $j <= $indexLast; $j++){
		if($min > $arr[$j]){
			$swapMin = $min;
			$min = $arr[$j];
			$arr[$j] = $swapMin;
		}
	};
	echo "Max: ".$max."<br>";
	echo "Min: ".$min;
?>