<?php
/*
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91x99. 
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 */

function maxplaindrome($d){
	$plaindrome = 0;
	$_tmp_plaindrome = 0;

	$append_zero = str_repeat("0",$d-1);
	$begin = (int)"1".$append_zero;
	$end = (int)str_repeat("9",$d);

	for($i=$begin;$i<=$end;$i++){
		for($j=$begin;$j<=$end;$j++){
			$k = $i*$j;
			$_k = str_split($k);
			$reverse_k =implode("",array_reverse($_k));

			if($k == $reverse_k){
				$_tmp_plaindrome = $k;
				if($_tmp_plaindrome > $plaindrome){
					$plaindrome = $_tmp_plaindrome;
				}
			}
		}
	}
	return $plaindrome;
}

if(!empty($argv[1])){
	if($argv[1] < 2 ){
		echo "digit must greater than 1.";
		exit;
	}else{
		$digit = $argv[1];
	}
}else{
	echo "please tell me a digit for calculate.";
	exit;
}

$dd = maxplaindrome($digit);
echo "the largest plaindrome is ".$dd."\n";


