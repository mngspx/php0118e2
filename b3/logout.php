<h1>Trang logout</h1>
<?php

//xóa cookie
setcookie('page_da_xem','',time() - 30 * 60 );

// xóa toàn bộ cookie
foreach($_COOKIE as $ck_name =>$val){
	setcookie($ck_name,'',time() - 1000 * 60 );
}

// xóa session: Kết thúc phiên làm việc
// cách 1: Dùng hàm session_unset();
// cách 2: Dùng hàm session_destroy();
// cách 3: Dùng hàm unset() để xóa từng phần tử session

session_unset(); // xóa các biến session

// session_destroy(); // hủy session 

// unset($_SESSION['login']); // xóa 1 biến login trong session


echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_SESSION);
echo '</pre>';
// sau khi đăng xuất thì chuyển về trang chủ
header('Location: index.php');