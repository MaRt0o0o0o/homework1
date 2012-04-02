<!DOCTYPE html>
<html>
	<head>
		<title>Number :</title>
		<style>
		p.red {
		color: red;
		}
		p.blue {
		color: blue;
		}
		</style>
	</head>
	<body>
		<form action="homework_1.php" method="get">
			<label for="numbers">Enter number:</label>
			<input type="text" name="numbers" />
			<br />
			<input type="submit" value="O.K." />
		</form>
		<?php
			function isPrime($test) {
			$prime = "The number ".$_GET["numbers"]." is prime";
			if ($test % 2 == 0 && $test != 2){
				return '<p class="blue">The number '.$_GET["numbers"].' is NOT prime!</p>';
			} 
			if ($_GET["numbers"] == 2 || $test == 3) {
				return "The number ".$_GET["numbers"]." is prime";
			}
			for ($try = 3; $try < $test; $try++){
				if (($test % $try) == 0) {
					$prime = '<p class="blue">The number '.$_GET["numbers"].' is NOT prime!</p>';
				}
			}
				return $prime;
			}
			if (is_numeric ($_GET["numbers"])) {
				if ($_GET["numbers"] >= 0 && $_GET["numbers"] <= 19999) {
					$i = isPrime($_GET["numbers"]);
					echo $i;
				}
				else {
				echo '<p class="red">The parameter is not within the range [0,19999]</p>';
				}
			}
			else {
			echo '<p class="red">The parameter is not a number</p>';
			}
			?>
	</body>
</html>