<meta charset="utf-8">
<?php
// giải ptb2

// 2x2 + 3x +5 = 0;
$a = 2;
$b = 3;
$c = -5;

if($a == 0){
	if($b != 0){

		$x = -$c /$b;
		echo "<br>Phương trình là bậc nhất: {$b}x + {$c} = 0 có nghiệm là $x";

	}elseif($c !=0){
		echo '<br>Phương trình vô nghiệm';
	}else{
		echo '<br>Phương trình vô định';
	}	
}else{
	echo "Giải phương trình: {$a}x<sup>2</sup> + {$b}x + {$c} = 0 <br>";

	$delta = ($b*$b) - 4*$a*$c;
	echo "\$delta = $delta";

	if($delta <0 ){
		echo '<br>Phương trình vô nghiệm';
	}elseif($delta ==0){

		$x = - $b / (2*$a);

		echo "<br>Phương trình có nghiệm kép x<sub>1</sub> = x<sub>2</sub> = $x";
	}else{
		$x1 = (-$b - sqrt($delta))/(2*$a);
		$x2 = (-$b + sqrt($delta))/(2*$a);
		echo "<br>Phương trình có 2 nghiệm phân biệt: <br>";

		echo "<br>x<sub>1</sub> = $x1 <br> x<sub>2</sub> = $x2";

	}
}



?>

