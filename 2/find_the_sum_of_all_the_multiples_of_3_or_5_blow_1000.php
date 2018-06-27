<?php
/*
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */
$bound = $argv[1];
$num_1 = $argv[2];
$num_2 = $argv[3];
$list = array();

for($i=1;$i<$bound;$i++){
   if($i%$num_1 == 0 || $i%$num_2 == 0){
        $list[] = $i;
   } 
}
echo array_sum($list);
echo "\n";




