<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Bai Tap 3
	</title>
</head>
<body>
	<?php 
	for ($i=1; $i <= 100; $i++) { 
		// code...
		if ( $i%3==0 && $i%5==0 ) {
			// code...
			echo("FizzBuzz <br>");
		}else if ($i%3==0) {
			// code...
			echo("Fizz <br>");
		}else if ($i%5==0) {
			// code...
			echo("Buzz <br>");
		}
		else {
			echo $i . "<br>";
		}
	}
	?>
</body>
</html>