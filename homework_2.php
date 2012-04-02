<!DOCTYPE html>
<html>
 <head>
  <title>Simple Form usage :</title>
 </head>
 <body>
 
	<?php 
	$numbers=range(20, 1000, 37);
	foreach ($numbers as $k=>$v) {
		$prime=0;
		for($j=2;$j<=$v/2;$j++) 
		if(($v%$j)==0) { 
		$prime=1; 
		break; 
		} 
		if($prime==0) {  
		echo $v." is  prime number<br/>";
		}
	}
	if (in_array("146", $numbers)) {
		echo "The number 146 exist in the array <br/>";
	}
	else {
	echo "The number 146 does not exist in the array <br/>";
	}
	if (in_array("284", $numbers)) {
		echo "The number 284 exist in the array <br/>";
	}
	else {
	echo "The number 284 does not exist in the array <br/>";
	}
	if (in_array("871", $numbers)) {
		echo "The number 871 exist in the array <br/>";
	}
	else{
	echo "The number 871 does not exist in the array <br/>";
	}
	?>
</body>
</html>