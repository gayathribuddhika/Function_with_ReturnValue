<?php

function add ($num1,$num2){
	$sum = $num1 + $num2;
	return $sum;
	
}
echo add (10,5);

echo "<br>";

function divide ($num1,$num2){
	$result = $num1 / $num2;
	return $result;
}

//echo divide (10,2);

$answer = divide (add(10,10),add(5,5));
	echo $answer;
?>