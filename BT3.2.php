<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PTB2</title>
</head>
<body>
	<?php 
	echo("Giai phuong trinh bac 2: <br>");
		$a = rand(0,100);
		$b = rand(0,100);
		$c = rand(0,100);
		echo "So a la: " . $a . "<br>";
		echo "So b la: " . $b . "<br>";
		echo "So c la: " . $c . "<br>";
		$del = $b*$b-4*$a*$c;
		if($del<0){
			echo("Phuong trinh vo nghiem <br>");
		}else if($del==0){
			echo("Phuong trinh co nghiem kep: " . -$b/(2*$a) ."<br>");
		}else {
			echo("Phuong trinh 2 ngiem <br>");
			echo("x1= " . (-$b+sqrt($del))/(2*$a). "<br>");
			echo("x2= " . (-$b-sqrt($del))/(2*$a). "<br>");
			
		}
	?>
</body>
</html>