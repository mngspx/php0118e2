<?php
//1. Hàm đơn giản:
function Tong($a, $b){
	return $a + $b;
}

// gọi hàm: 
$t = Tong(4, 6);
echo $t;

//2. Truyền tham chiếu
function Tong2 (&$a, $b){
	$a ++;
	$b ++;
	return $a + $b;
}

// gọi hàm:
$x = 5;
$y = 3;
$t = Tong2($x, $y);
echo "<br>Tong2 = $t ; x = $x; y = $y";

//3. Phạm vi biến:
function Tong3 (){
	global $x, $y;
	echo __LINE__;
	return $x + $y;
}
 

if(!function_exists('Tong3')){
	function Tong3(){
		echo "<hr>";
		echo __LINE__;
		echo __FUNCTION__;
	}


}

// echo "Tong 3 = ". Tong3();
Tong3();