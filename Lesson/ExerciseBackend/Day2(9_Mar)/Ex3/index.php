<?php
	$sum = 0;
	$n = 100;
	$i = $j = 1;
	while($i <= $n){
		$sum += $i;
		$i++;
	};
	echo "Tong cac so tu 1->".$n." la: ".$sum."<br>";
	echo "Cac so chia het cho 3 tu 20-50 la: ";
	while($j <= $n){
		if($j>=20 && $j<=50){
			if($j % 3 == 0){
				echo $j." ";
			}
		};
		$j++;
	}	
?>