<meta charset="utf-8">
<?php

$hoTen ='Nguyen Van A';

echo "Họ và tên: <b>$hoTen</b>";
echo "<br>Họ và tên: <b>{$hoTen}</b>";

echo '<br>Họ và tên: <b>$hoTen</b>';

echo '<br>Họ và tên: <b>'.$hoTen.'</b>';

echo "<br>Tên biến là:\n \" \$hoTen \" ";

?>
<hr>
<?php

$bang = <<<TenBang
		<table border="1" cellpadding='10'>
			<tr>
				<th>STT</th>
				<th>Username</th>
				<th>Fullname</th>
			</tr>
			<tr>
				<td>1</td>
				<td>abc</td>
				<td>$hoTen</td>
			</tr>
		</table>
TenBang;

echo $bang;

 
 echo '<hr> Toán tử: <br>';

 $a = 123;
 $b = '123';

 $soSanh = $a === $b;

 var_dump($soSanh);

 $bang ='<table border=1>';
 $bang  .='<tr><td>abc</td></tr>';
 $bang .='</table>';
 
 echo $bang;


