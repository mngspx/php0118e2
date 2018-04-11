<?php 
	$user ='';
	$pass = '';
	$msg = '';

	if(isset($_POST['txt_user'])){

		$user = $_POST['txt_user'];
		$pass = $_POST['txt_pass'];

		if($user =='admin' && $pass =='123'){
			$msg = "Đăng nhập thành công!";

			// Ghi vào session 
			$_SESSION['login'] = 'admin';
			$_SESSION['login_msg'] = $msg;

 
			// tự động chuyển trang khi đăng nhập thành công!
			header('Location: index.php?page=quantri');
		}
		else
		{
			$msg = "<pan style='color:red'>Sai thông tin đăng nhập</span>";
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