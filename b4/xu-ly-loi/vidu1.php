<meta charset="utf-8">
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // thiết lập múi giờ
ini_set('error_reporting', E_ALL);  // thiết lập chế độ hiển thị lỗi
error_reporting(E_ALL); // tắt các thông báo lỗi mặc định của php
// Muốn hiện hết thông báo thì dùng E_ALL,
// nếu muốn tắt thì cho giá trị là 0


function HamXuLyHienThiLoi($ma_loi, $noi_dung,$file_loi,$line){
	$ten_file_loi = basename($file_loi);
	$msg = <<<EndErr
		<p style ="color:red">
			<b>Lỗi [$ma_loi]:</b> $noi_dung , File: $ten_file_loi($line)
		</p>
EndErr;
	echo $msg;

	if($ma_loi == 2 || $ma_loi == 256){
		// lỗi nguy hiểm
		die("Dừng chương trình");
	}
}

set_error_handler('HamXuLyHienThiLoi');
 
 echo $x;

   // require_once 'b1.php';


if(!file_exists('b1.php'))
	trigger_error('Lỗi không tồn tại file b.php',E_USER_ERROR);
	// die('Lỗi không tồn tại file b');
else
	require_once 'b1.php';

