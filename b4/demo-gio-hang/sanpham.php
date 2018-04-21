<?php session_start();
require_once 'dulieu.php';

// echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
// 	print_r($ds_sp);
// echo '</pre>';

$so_luong_sp_gio_hang = 0;
if(isset($_SESSION['giohang'])){
	$so_luong_sp_gio_hang = count($_SESSION['giohang']);
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Demo giỏ hàng</title>
</head>
<body>

		<a href="show-cart.php"  style="float:right"> Giỏ hàng (<?php echo $so_luong_sp_gio_hang; ?> Sản phẩm ) </a>


	<h1>Danh sách sản phẩm</h1>
	<ul>
		<?php
		
		// [0] => Array
  //       (
  //           [id] => 123
  //           [name] => Giày Patin trẻ em
  //           [vote] => 3
  //           [giaban] => 449000
  //           [giagoc] => 800000
  //           [hinhanh] => hinh1.jpg
  //       )

			foreach($ds_sp as $item_sp){

				$link_add_cart = "<a href='add-cart.php?id={$item_sp['id']}'>Mua </a>";

				echo "
					<li style='margin: 10px;'>
					<b>Tên SP: {$item_sp['name']}</b>
					<br>Đánh giá: {$item_sp['vote']}
					<br>Giá bán: {$item_sp['giaban']}
					<br>Giá gốc: {$item_sp['giagoc']}
					$link_add_cart 
					</li>

				";



			}



		?>
	</ul>

 
</body>
</html>