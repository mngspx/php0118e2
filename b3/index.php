<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="wrapper">
	<header id="top-page">
		<?php 
			if(isset($_SESSION['login']))
				echo "Xin chào: ".$_SESSION['login'];
		 ?>
		<?php @include 'qc.html'; ?>
	</header>
	<nav id="main-menu">
		<?php include_once 'menu.php';  ?>

	</nav>

	<aside id="left">
		<?php @include 'qc.html'; ?>
	</aside>
	<section id="content">
		<?php
			$pg = @$_GET['page'];

			switch ($pg) {
				 
				 case 'gioithieu':
				 	require 'trang-gioi-thieu.php';
				 break;

				 case 'dangnhap':
				 	require 'trang-dang-nhap.php';
				 break;

				 case 'dangxuat':
				 	require 'logout.php';
				 break;

				 case 'quantri':
				 	require 'quantri.php';
				 break;
				 

				 default:
				 		require 'trang-chu.php';
				 break;
			}

			
		 ?>
	</section>
	<div class="clr"></div>
	<footer id="foot-page">
		<?php
			require 'menu.php';
		 ?>
	</footer>
</div> 
</body>
</html>