<?php
// lấy ra các key của mảng 

$a=array("red","green","blue"=>array('abc','xyz'));

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($a);
echo '</pre>';

$mang_key = array_keys($a);

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($mang_key);
echo '</pre>';
