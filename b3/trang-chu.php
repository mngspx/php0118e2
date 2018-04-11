<h1>Nội dung Trang chủ</h1>

<?php
	$ck = $_COOKIE;

	echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
		print_r($ck);
	echo '</pre>';

	echo $_COOKIE['page_da_xem'];


	// echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	// 	print_r($_SERVER);
	// echo '</pre>';
?>