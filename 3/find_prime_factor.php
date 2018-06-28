<?php
/*
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 What is the 10 001st prime number?
 */
//$bound = 100;
$prime_list = array();
$prime_fector_list = array();
$s = 0;

function find_prime_fector_v1(){
    for($i=2;$i<=600851475143;$i++){
        $s=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j ==0){
                $s++;
            }
        }
        if($s<=2){
            $prime_list[] = $i;
            if( 600851475143 % $i == 0 ){
                echo $i."\n";
            }
        }
    }
}

find_prime_fector_v1();







