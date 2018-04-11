<?php
	$user ='';
	$pass = '';
	$msg = '';

	if(isset($_POST['txt_user'])){

		$user = $_POST['txt_user'];
		$pass = $_POST['txt_pass'];

		if($user =='admin' && $pass =='123'){
			$msg = "Đăng nhập thành công!";
			// tự động chuyển trang khi đăng nhập thành công!
			header('Location: trangquantri.php');
		}
		else
		{
			$msg = "Sai thông tin đăng nhập";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<h1>Đăng nhập</h1>
<?php echo $msg; ?>
<form action="" method="post">
	<input type="text" name="txt_user" placeholder="username">
	<input type="password" name="txt_pass" placeholder="Password">
	<input type="submit" name="" value="Login">
</form>

 
</body>
</html>