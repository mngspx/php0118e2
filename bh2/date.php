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


//== Cắt chuỗi 
$chuoi = "           abc     ";
echo '<br>'.$chuoi. '<br>';
echo trim($chuoi);


echo '<hr>';
$chuoi = "Hà Nội ngày hôm nay là ngày gì";

$chuHoa = strtoupper($chuoi); // Không chuyển ký tự dấu tiếng Việt
$chuHoa = mb_strtoupper($chuoi);

echo "<br>Chữ in hoa: $chuHoa";

$chu_thuong = mb_strtolower($chuHoa);
echo "<br>Chữ thường: ".$chu_thuong  ;

echo "<br>Chữ cái đầu chuỗi: ". ucfirst($chu_thuong );
echo "<br>Chữ cái đầu từ in hoa: ". ucwords($chu_thuong );

echo '<hr>';
// tách chuỗi thành mảng
$mang = explode(' ', $chuoi);
// tách các từ riêng
echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($mang);
echo '</pre>';

// ghép mảng thành chuỗi
$chuoi_ghep = implode('__', $mang);
echo "<br>Chuoi: ". $chuoi_ghep;

$tien = 12242425.08232;
$dinh_dang = number_format($tien);

echo "<br>$dinh_dang";

echo "<br>1 số lẻ thập phân: ". number_format($tien,1);

echo "<br>TH3: ".number_format($tien, 1,',', '-');

echo '<hr>Xử lý chuỗi:  '.$chuoi;
echo "<br> Chiều dài chuỗ: ". strlen($chuoi);
echo "<br>Ký tự thứ 2 là: ". $chuoi[4];

// kiểm tra chuỗi con: 
$vi_tri_chuoi_con = strpos($chuoi, 'H');
var_dump($vi_tri_chuoi_con);

if($vi_tri_chuoi_con === false){
	echo 'Không tồn tại';
}else
echo "Có tồn tại";