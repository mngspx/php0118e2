<?php
$mang1 = array('xanh','do','tim','vang');
$ten = 'Nguyen van A';

$kq = is_array($mang1);
var_dump($kq);

echo '<br>';

var_dump(is_array($ten));

//======= hàm in_array

$arr_lang = array('en','vi');

$lang = $_GET['lang'];

if(in_array($lang, $arr_lang)){
	echo "Chon ngon ngu hop le: ". $lang;
}else{
	echo "Ngon ngu ban chon khong ton tai!";
}

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_GET);
echo '</pre>';


echo '<hr>';
$a=array("red","green","blue"=>array('abc','xyz'));

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($a);
echo '</pre>';

$b = array_pop($a);

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($a);
echo '</pre>';

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($b);
echo '</pre>';