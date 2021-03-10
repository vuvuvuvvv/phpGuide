<?php 
	$arr = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$count = count($arr);
	$colorCode = 667259;
	$indexMaxArr = $count - 1;
	for($i =0; $i < count($arr); $i++){
		if($i != $indexMaxArr){
			echo '<span style="color:#'.$colorCode.';font-size:45px;">'.$arr[$i].'-</span>';
			$colorCode += $i*299;
		} else {
			echo '<span style="color:#'.$colorCode.';font-size:45px;">'.$arr[$i].'</span>';
			$colorCode += $i*942;
		}
	}
?>