<?php 
function sum($a){
	$sum=0;
	for ($i=1; $i <= $a; $i++) { 
		$sum=$sum+$i;
	}
	echo "sum=".$sum;
}
sum(10)
 ?>