<?php
// 1. khai báo múi giờ cho website.
date_default_timezone_set ('Asia/Ho_Chi_Minh');


$ngay = date("d/m/Y H:i:s");
echo "<br>Ngày giờ hiện tại $ngay";

$thoi_gian_hien_tai = time();

echo "<br>Chỉ số Thời gian hiện tại: $thoi_gian_hien_tai";

$micro = microtime(1);
echo "<br>Chỉ số Thời gian hiện tại: $micro";

// chuyển lại định dạng ngày tháng
$abc = date("d/m/Y H:i:s",1523106590);
echo '<br>'.$abc;

// chuyển chuỗi ngày tháng thành time 
$chuoi  = date("Y-m-d H:i:s",1523106590);

echo "<br> Chuỗi lưu CSDL: $chuoi <br>";
// chuyển thành time: 
echo "<br>Chuyển chuỗi thành Chỉ số: " . strtotime($chuoi);