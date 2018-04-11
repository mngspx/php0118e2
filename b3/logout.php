<h1>Trang logout</h1>
<?php

//xóa cookie
setcookie('page_da_xem','',time() - 30 * 60 );

// xóa toàn bộ cookie
foreach($_COOKIE as $ck_name =>$val){
	setcookie($ck_name,'',time() - 1000 * 60 );
}
