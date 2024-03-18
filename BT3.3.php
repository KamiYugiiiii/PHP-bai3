<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EPL</title>
</head>
<body>
	<?php 
	$FC = array("Chelsea" => rand(0,100),
				"Arsenal" => rand(0,100),
				"ManUnited" => rand(0,100),
				"ManCity" => rand(0,100),
				"Liverpool" => rand(0,100),
				"Tottenham" => rand(0,100));
	echo "Ket qua thi dau: <br>";
	foreach ($FC as $name => $result) {
		// code...
		echo $name. ": ".$result ."<br>"; 
	}
	$max_value = max(array_values($FC));
	// for ($i=$FC.leng; $i $FC.leng ; $i+$FC.leng) { 
	// 	// code...
	// }
	echo "Doi vo dich: " .array_search($max_value, $FC);
	?>
</body>
</html>