<meta charset="utf-8">
<?php
ini_set('error_reporting', E_ALL); 
error_reporting(E_ALL); // tắt các thông báo lỗi mặc định của php
// Muốn hiện hết thông báo thì dùng E_ALL,
// nếu muốn tắt thì cho giá trị là 0


function HamXuLyHienThiLoi($ma_loi, $noi_dung){
	$msg = <<<EndErr
		<p style ="color:red">
			<b>Lỗi [$ma_loi]:</b> $noi_dung 
		</p>
EndErr;
	echo $msg;
}

set_error_handler('HamXuLyHienThiLoi');
 
 echo $x;

 require_once 'b1.php';


if(!file_exists('b1.php'))
	die('Lỗi không tồn tại file b');
else
	require_once 'b1.php';

