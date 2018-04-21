<?php session_start();

if(isset($_GET['id'])){
	$id = intval($_GET['id']);
	if($id > 0){
		// ID hợp lệ
		if(isset($_SESSION['giohang'][$id]))
			$_SESSION['giohang'][$id] ++;
		else
			$_SESSION['giohang'][$id] = 1;

	}
}

header('Location: sanpham.php'); // chuyển trang


