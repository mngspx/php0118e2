<meta charset="utf-8">
<?php

// $hoTen = "Nguyễn Văn A";

// echo $hoTen;

// echo '<hr>';

$tenCot = 'hoTen';
$$tenCot = 'Nguyễn Thi B';

echo $hoTen;

echo '<hr>';

var_dump($hoTen);

$kieu_dulieu = gettype($hoTen);

echo '<br>'.$kieu_dulieu;

$hoTen = 123;

echo '<br>';
var_dump($hoTen);

$hoTen = '123';

echo '<br> ';
var_dump($hoTen);

$hoTen = (int) $hoTen;

echo '<br> sau khi ép kiểu: ';
var_dump($hoTen);

settype($hoTen, 'string');
echo '<br> sau khi settype: ';
var_dump($hoTen);

unset($hoTen);
echo '<br> sau khi unset: ';
// var_dump($hoTen);

if(isset($hoTen)){
	echo '<br>Biến hoTen có tồn tại';
}else{
	echo '<br>Biến họ tên KHÔNG TỒN TẠI';
}


define('_URL', 'http://localhost:8055/php0118e2/vidu1');

echo _URL;

echo '<hr>';

echo __FILE__; // đường dẫn tới file hiện tại
echo '<br>'.__DIR__; // đường dẫn tới thư mục hiện tại
echo '<br>Dòng gọi lệnh in line: '.__LINE__;

$hoTen = "Nguyen Van A";
print_r($hoTen); // in thông tin của biến hoặc đối tượng, mảng

