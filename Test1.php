<?php 
echo "djtmetuyetvoi <br>";
$flag = true;
for ($i=0; $i <=10 ; $i++) { 
	// code...
	// 
	if($i == 0){
		echo "Phan tu trung hoa ";
	}else {
		if($i % 2 == 0 ) {
		$flag = true;
		} else{
			$flag = !$flag;
		}
		if($flag == true ){
			echo " Day la so chan ";
		}
		else{
			echo " Day la so le ";
		}
	}

	echo $i . "<br>";
	//echo"  DucAnhDepTrai <br>" ;
}
 ?>