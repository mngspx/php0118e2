<?php
session_start();
require_once 'dulieu.php';

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_SESSION);
echo '</pre>';

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_POST);
echo '</pre>';

  if(isset($_POST['update'])){

  		foreach($_POST as $txt_id => $sl ){
  			if(strpos($txt_id, 'sp_')!== false){
  				// có tồn tại 
				$id = str_replace('sp_', '', $txt_id);

				$id = intval($id);
				
				if($sl>0)
					$_SESSION['giohang'][$id] = $sl; 
				else
					unset($_SESSION['giohang'][$id]);

  			}
 
  		} 
  }




?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Giỏ hàng</title>
</head>
<body>
<h1 align="center">Thông tin giỏ hàng</h1>

<form action="" method="post">
<table border="1" align="center" cellpadding="10">
	<tr>
		<td>STT</td><td>Tên sản phẩm</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td>
	</tr>
	<?php 
 
		$stt = 0;
		$tong_tien = 0;
		if(count($_SESSION['giohang'])>0){
			
			foreach($ds_sp as $row ){
				foreach($_SESSION['giohang'] as $id_sp => $soluong){
					if($id_sp == $row['id'] ){
						// tìm thấy sản phẩm phù hợp ==> bắt đầu xử lý in ra màn hình
						$stt ++;

						$thanh_tien = $soluong  * $row['giaban'];

						$tong_tien += $thanh_tien;

						$thanh_tien = number_format($thanh_tien);
						$don_gia = number_format($row['giaban']);

						echo "<tr>
									<td>{$stt}</td>
									<td>{$row['name']}</td>
									<td><input type='number' name='sp_{$row['id']}' value='{$soluong}' min='0'/></td>
									<td>{$don_gia }</td>
									<td>{$thanh_tien}</td>
								</tr>"; 

					} 
				}

			}

		} 

	?>
	<tr>
		<td colspan="4" align="right">Tổng tiền</td><td><b><?php echo number_format($tong_tien); ?></b></td>
	</tr> 
</table>


<table align="center" border="0" cellpadding="10">
	<tr>
		<td ><a href='sanpham.php'>Tiếp tục mua</a></td>
		<td ><input type="submit" name="update" value="Cập nhật"></td>
		<td><a href='order.php'>Gửi đơn hàng</a></td>
	</tr>
</table>

</form>

 
</body>
</html>
