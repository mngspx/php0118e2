<?php
// session_start(); comment lại vì trong trang index.php đã có rồi
echo $_SESSION['vidu'];

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($_SESSION);
echo '</pre>';

echo  "<h2>{$_SESSION['login_msg']}</h2>";