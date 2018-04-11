<?php
session_start();

$_SESSION['vidu'] = 'Đây là ví dụ session';
$_SESSION['login'] = array('user'=>'abc');


echo $_SESSION['vidu'];
