<?php
// Kiểm tra quản trị đã đăng nhập chưa. Nếu chưa đăng nhập thì chuyến sang trang đăng nhập
if(!isset($_SESSION['login'])){
	// chưa đăng nhập
	header('Location: index.php?page=dangnhap');
}
// else thì các công việc dưới đây.



// session_start(); comment lại vì trong trang index.php đã có rồi


echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_SESSION);
echo '</pre>';

echo  "<h2>{$_SESSION['login_msg']}</h2>";