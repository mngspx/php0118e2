<?php

$mang1 = array('xanh','do','tim','vang');

var_dump($mang1);
 
echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($mang1);
echo '</pre>';
 

$mang2 = array('id'=>1,'hoTen'=>'Nguyễn Văn A','emai'=>'abc@gmail.com');

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($mang2);
echo '</pre>';
  

for($i = 0; $i < count($mang1); $i++){
	echo "<br>Phần tử thứ $i = {$mang1[$i]} ";
}

echo '<hr>';
foreach($mang2 as $key => $giatri ){
	echo "<br> $key  = $giatri";
}