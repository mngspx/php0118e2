<?php
$cauhoi1 = array(
		'quest' =>'Cách tốt nhất để có thêm RAM để xử lý bản tin là?',
		'answ' => array('Mua chương trình diệt Virus' =>false,
				 		'Đóng bất cứ tập tin nào bạn không cần dùng'=>true,
				 		'Đóng bất cứ chương trình ứng dụng nào bạn đang không sử dụng'=>true,
				 		'Xóa bớt file trong máy tính'=>false
				 		),
		'quest_type' =>'multi'

				);

echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
	print_r($cauhoi1);
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

	<div>
		<?php 
			$noidung =$cauhoi1['quest'] ;
			$dapan = $cauhoi1['answ'];
			$kieu  = $cauhoi1['quest_type'];

			ksort($dapan);
			echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
				print_r($dapan);
			echo '</pre>';

			echo "<b>Câu hỏi 1: </b> $noidung <br>";
			echo '<ul>';
			if($kieu =='multi'){
				// chọn nhiều đáp án đúng ==> html in ra checkbox
				foreach($dapan as $da => $dungsai){
					echo "<li>";
						if($dungsai == true){
							$check = ' checked ';
						}else{
							$check = ''; 
						}
						echo "<input type='checkbox' $check /> $da";
					echo '</li>';
				}
			}else{
				// chọn 1 đáp án đúng....
			}
			echo '</ul>';
		?>
	</div>
 
</body>
</html>
