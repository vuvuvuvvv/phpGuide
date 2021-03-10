<?php
	$sum = 0;
	$sumSquare = 0;
	$n = 100;
	$i = $j = 1;
	while($i <= $n){
		$sum += $i;
		$i++;
	};
	while($j <= $n){
		$sumSquare += $j*$j;
		$j++;
	};
	echo "Tong cac so tu 1->".$n." la: ".$sum."<br>";
	echo "Tong binh phuong cac so tu 1->".$n." la: ".$sumSquare."<br>";
?>