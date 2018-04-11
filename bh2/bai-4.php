<?php
$ds_sp = array(
					array('id'=>123, 'name'=>'Giày Patin trẻ em','link'=>'/giay-patin-tre-em.html'),
					array('id'=>124,'name'=>'Giày Patin người lớn','link'=>'/giay-patin-nguoi-lon.html'),
					array('id'=>125,'name'=>'Xe điện cân bằng','link'=>'/xe-dien-can-bang.html'),
					array('id'=>126,'name'=>'Giày Patin giá rẻ','link'=>'/giay-patin-gia-re.html'),
					array('id'=>127,'name'=>'Phụ kiện patin','link'=>'/phu-kien-patin.html'),
					array('id'=>128,'name'=>'Xe trượt Scooter','link'=>'/xe-truot-scooter.html'),
					array('id'=>129,'name'=>'Giày Patin cao cấp','link'=>'/giay-patin-cao-cap.html')
);


// echo '<pre>'.__FILE__.'::'.__METHOD__.'('.__LINE__.')';
// 	print_r($ds_sp);
// echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

	<div id="nav">
		<ul>
			<?php
				foreach($ds_sp as $item){

 // Array
 //        (
 //            [id] => 123
 //            [name] => Giày Patin trẻ em
 //            [link] => /giay-patin-tre-em.html
 //        )
					$id = $item['id'];
					$name = $item['name'];
					$link = $item['link'];

					$link = str_replace('.html', ".$id.html", $link);

					echo "<li><a href='$link'>$name</a></li>";
 
				}
			?>
		</ul>
	</div>
 
</body>
</html>